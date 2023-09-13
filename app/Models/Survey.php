<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $table = 'lime_survey_689126'; // Replace with your table name if different

    protected $fillable = [
        'token',
        'submitdate',
        'lastpage',
        'startlanguage',
        'seed',
        '689126X1X1',
        '689126X1X2',
        '689126X1X3',
        '689126X1X4',
        'survey_sent_date',
        'survey_submitted_status',
        'whatsapp_number',
        'chat_id',
        'customer_name',
        'chat_start_datetime',
        'service_inquiries',
        'agent_id',
        'agent_name',
        'Served_By',
    ];

    // If you have timestamp columns (created_at and updated_at), you can specify them here
    // public $timestamps = true;
}
