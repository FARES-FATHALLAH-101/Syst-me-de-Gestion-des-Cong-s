<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    public function edit($id)
    {
        $leaveRequest = leaveRequest::where('id',$id)
        ->where('user_id',Auth::id())
        ->firstOrFail();
        if ($leaveRequest->status !='En attente') {
            return redirect()->route('leave.list')
            ->with('error', 'Cette demande ne peut plus etre modifiée.');
        }
        return view('editLeaveRequest', compact('leaveRequest'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'leave_type'=>'required',
            'start_date'=>'required|date',
            'end_date'=>'required|date|after_or_equal:start_date',
            'reason'=> 'required',
        ]);
        $leaveRequest= LeaveRequest::findOrFail($id);

        $leaveRequest->leave_type = $request->leave_type;
        $leaveRequest->start_date=$request->start_date;
        $leaveRequest->end_date=$request->end_date;
        $leaveRequest->reason= $request->reason;

        $leaveRequest->save();
        return redirect()->route ('leave.list');
    }
    public function cancek($id)
    {
        $leaveRequest = LeaveRequest::findOrFail($id);
        if($leaveRequest->statut !='En attente') {
            return redirect()->route('leave.list')->with('error','Cette demande ne peut pas etre annulée.');
        }
        $leaveRequest->delete();
        return redirect()->route('leave.list')->with('success','la demande a été annulée avec succès.');
    }

    public function refresh()
    {
        $leaveRequests = LeaveRequest::where('user_id', Auth::id())->get();
        return view('myRequests',['leaveRequests'=>$leaveRequests]);
    }
    public function search()
    {
        return view('searchleaveRequest');
    }
    public function searchResult(Request $request)
    {
        $search = $request->search;
        $leaveRequests= LeaveRequest::where('leave_type', 'like', "%$search%")->orWHERE('status','like',"%$search")
        ->orWHERE('start_date','like',"%$search%")
        ->orWHERE('end_date','like',"%$search%")->get();
        return view('searchLeaveRequest',compact('leaveRequests'));
    }
}
