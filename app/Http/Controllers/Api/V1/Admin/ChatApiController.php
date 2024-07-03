<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Events\MessageSent;
use App\Models\Chat;
use App\Models\room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ResponseHelper;


class ChatApiController extends Controller
{
    use ResponseHelper;
    public function send_message(Request $request)
    {
        $room = room::where(['trip_id' =>  $request->trip_id])->first();
        if ($room  == null) {
            $room = room::create(['trip_id' =>  $request->trip_id]);
        }
        $conversion = [
            'sender_id'     => auth()->user()->id,
            'message'       => $request->message,
            'receiver_id'   => 2,
            'room_id'       => $room->id,
        ];
        $conversion = Chat::create($conversion);
        event(new MessageSent($conversion,  $request->trip_id));

        return $this->apiResponseHandler(200, true, __('request.data_retrieved'));
    }
}
