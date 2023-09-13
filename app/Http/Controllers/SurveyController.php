<?php

namespace App\Http\Controllers;
    use Illuminate\Support\Carbon; // Import the Carbon library
use Illuminate\Http\Request;

use App\Models\Survey;

class SurveyController extends Controller
{


    public function index()
    {
        $surveys = Survey::all();
    
        // Format the specific date fields as desired
        $formattedSurveys = $surveys->map(function ($survey) {
            return [
                'id' => $survey->id,
                'token' => $survey->token,
                'submitdate' => Carbon::parse($survey->submitdate)->format('d-m-Y H:i:s'), // Change the format here
    
                '689126X1X1' => $survey->{'689126X1X1'},
                '689126X1X2' => $survey->{'689126X1X2'},
                '689126X1X3' => $survey->{'689126X1X3'},
                '689126X1X4' => $survey->{'689126X1X4'},
                'lastpage' => $survey->lastpage,
                'startlanguage' => $survey->startlanguage,
                'seed' => $survey->seed,
                'survey_sent_date' => Carbon::parse($survey->survey_sent_date)->format('d-m-Y'), // Change the format here
    
                'survey_submitted_status' => $survey->survey_submitted_status,
                'whatsapp_number' => $survey->whatsapp_number,
                'chat_id' => $survey->chat_id,
                'customer_name' => $survey->customer_name,
    
                'chat_start_datetime' => Carbon::parse($survey->chat_start_datetime)->format('d-m-Y'),
    
                'service_inquiries' => $survey->service_inquiries,
            'agent_id' => $survey->agent_id,
            'agent_name' => $survey->agent_name,
            'Served_By' => $survey->Served_By,
            ];
        });
    
        return $formattedSurveys;
    }
    

    public function show($id)
    {
        return Survey::findOrFail($id);
    }

}