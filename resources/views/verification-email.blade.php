<h1>User Verification</h1>


<p>
    Welcome {{$user->name}}!
</p>

<p>
    You're getting this email to make sure it was you. 
    Please click the verification link to verify your account.
</p>

<p>
    <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}"> 
    Click to verify!
    </a>
</p>