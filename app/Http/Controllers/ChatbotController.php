namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function sendMessage(Request $request)
    {
        $appId = config('services.sendbird.app_id');
        $apiToken = config('services.sendbird.api_token');
        $channelUrl = 'YOUR_CHANNEL_URL'; // Replace with the channel URL from Sendbird
        $userId = 'sendbird_desk_agent_id:cbec9547-8ba1-4b1b-b5ef-9879d5792db6'; // From your screenshot
        $message = $request->input('message');

        $response = Http::withHeaders([
            'Api-Token' => $apiToken,
            'Content-Type' => 'application/json',
        ])->post("https://api-{$appId}.sendbird.com/v3/group_channels/{$channelUrl}/messages", [
            'message_type' => 'MESG',
            'user_id' => $userId,
            'message' => $message,
        ]);

        if ($response->successful()) {
            return response()->json(['status' => 'success', 'data' => $response->json()]);
        }

        return response()->json(['status' => 'error', 'message' => $response->json()], 500);
    }

    public function getMessages($channelUrl)
    {
        $appId = config('services.sendbird.app_id');
        $apiToken = config('services.sendbird.api_token');

        $response = Http::withHeaders([
            'Api-Token' => $apiToken,
        ])->get("https://api-{$appId}.sendbird.com/v3/group_channels/{$channelUrl}/messages");

        if ($response->successful()) {
            return response()->json(['status' => 'success', 'data' => $response->json()]);
        }

        return response()->json(['status' => 'error', 'message' => $response->json()], 500);
    }
}