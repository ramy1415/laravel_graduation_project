<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
   <!--  @if($mailInfo['role'] == 'designer')
        @php 
            $url=route('designer.show',$mailInfo['user']->id); 
        @endphp
    @elseif($mailInfo['role'] == 'company')
        @php
          $url=route('company.show',$mailInfo['user']->id); 
        @endphp
    @endif
 -->
	@if($mailInfo['status'] == 'rejected' )
    <div>
        <p>{{ $mailInfo['message'] }}</p>
       <p> please Update Your <a href="#">profile</a></p>
        
    </div>
    @elseif($mailInfo['status'] == 'accepted' )
    	<div>
	        <p>Your Profile has been accepted, enjoy  </p>
            <p>Click here to view your <a href="#">profile</a></p>
	        
	    </div>
    @endif

</body>
</html>