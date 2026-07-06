<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;


class LeaveRequestController extends Controller
{
    public function create()
    {
        return view('leaveRequest');
    }
    public function store(Request $request)
    {
        $request->validate([
            'leave_type'=> 'required',
            'start_date'=>'required|date',
            'end_date'=>'required|date|after_or_aqual:start_date',
            'reason'=> 'required',
        ]);
        LeaveRequest::create([
            'leave_type'=> $request->leave_type,
            'start_date'=> $request->start_date,
            'end_date'=> $request->end_date,
            'reason'=> $request->reason,
        ]);
        return redirect()->route('employe.dashboard')->with('succes','Votre demande de congé a été envoyée avec succès.');

    }

    public function index()
    {
        return view('listLeaveRequest');
    }
    public function refresh()
    {
        $leaveRequests = LeaveRequest::all();
        return view('myRequests',['leaveRequests'=>$leaveRequests]);
    }
    public function search()
    {
        return view('searchleaveRequest');
    }
}
