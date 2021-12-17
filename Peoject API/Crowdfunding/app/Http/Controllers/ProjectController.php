<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Initiator;
use App\Models\Userinfo;
use App\Models\Donation;
use App\Models\Donor;
use App\Models\Review;

class ProjectController extends Controller
{
    //
    public function homepage()
    {
        $initiator=Initiator::where('i_email','dipimamm@gmail.com')->first();
                   //           ->where('project.p_status',"approved")
                     //         ->with('project.review')->first();

        $project=Project::where('i_id',$initiator->i_id)
                                ->where('p_status','approved')
                                ->with('review.donor')->get();

       // $t = date('d-m-Y');

      //  return $project;

        return $project;
    }

    // public function proposeproject(){
    //    return view('initiator.pages.project.proposeproject');
    // }

    public function proposeprojectSubmit(Request $request){

        // $this->validate(
        //     $request,
        //     [
        //         'p_name'=>'required',
        //         'p_description'=>'required',
        //         'p_amount'=>'required|numeric',
        //         'p_deadline'=>'required',
        //         'p_image'=> 'required|mimes:JPG,png,jpeg|max:2048'
                
                
        //     ],
        //     [
        //         'p_name.required'=>'Title is required',
        //         'p_description.required'=>'Description is required',
        //         'p_amount.required'=>'Amount number is required',
        //         'p_amount.numeric'=>'Amount have to be numeric value',
        //         'p_deadline.required'=>'Deadline is required',
        //         'p_image.required'=>'Upload the image first'
              
        //     ]
        // );
       
       
        
        $entity= Userinfo::where('email',$request->p_email)->first();
                                
     
        
        $project= new Project();
        
      

        $project->p_name = $request->p_name;
        
        $project->p_description = $request->p_description;
        $project->p_amount = $request->p_amount; 
        $project->p_deadline = $request->p_deadline;
        $project->p_image ="4264546_a.jpg";
        $project->i_id = $entity->id;
        $project->p_status = "processing";
        $project->save();
        

        return $project;
     }

     public function projectdetails(Request $request)
     {
        $initiator=Userinfo::where('email',$request->email)->first();
        //           ->where('project.p_status',"approved")
          //         ->with('project.review')->first();

      $project=Project::where('i_id',$initiator->id)->get();
                        

        return $project; 
     }
     public function changeprojectdetails(Request $request)
     {
        $project= Project::where('p_id',$request->p_id)
                     ->update(['p_name'=> $request->p_name,'p_description'=> $request->p_description,'p_amount'=> $request->p_amount,'p_deadline'=> $request->p_deadline]);
 
 
          return $project;
     }

     public function getprojectdetails(Request $request)
     {
       

      $project=Project::where('p_id',$request->id)->get();
                        

        return $project;

         
     }

     public function donationhistory(Request $request)
     {
        $donation=Donation::where('p_id',$request->id)->get();
        
       return $donation;
     }
     
     public function alldonationhistory()
     {
        $donation=Donation::all();
        
       return $donation;
     }

     public function reviews(Request $request)
     {
        $review=Review::where('p_id',$request->id)->with('donor')->get();
       //  $reviewer=Donor::where('d_id',)->get();
        
       return $review;
     }

     public function allreviews()
     {
        $review=Review::all();
       //  $reviewer=Donor::where('d_id',)->get();
        
       return $review;
     }
     
     public function deletereviews(Request $request)
     {
      $res=Review::where('r_id',$request->id)->delete();

        
       
        
       return "ok";
     }

     public function searchproject(Request $request)
     {
         $search_text= $request->search;
         
         $initiator=Userinfo::where('email',$request->email)->first();
       

       $project=Project::where('i_id',$initiator->id)
                      ->where('p_name','LIKE','%'.$search_text.'%')->get();

        return $project;
     }

     public function filterprojectstatus(Request $request)
     {
        
         
        $initiator=Initiator::where('i_email','dipimamm@gmail.com')->first();
      

      $project=Project::where('i_id',$initiator->i_id)
                     ->where('p_status',$request->filterstatus)->get();

        return $project;
     }


     public function filterdonationmonth(Request $request)
     {
        $search_text= $request->filtermonth;

        $donation=Donation::where('p_id',session()->get('initiator.p_id'))
                  ->where('time','LIKE','___'.$search_text.'%')->get();

               return view('initiator.pages.project.filterdonationmonth')->with('data',$donation);;
     }
    

     
}
