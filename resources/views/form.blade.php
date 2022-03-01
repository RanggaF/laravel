@extends('layout.master')

@section('judul')
    <h2>Buat Akun Baru</h2>
    <h4>Sign Up Form</h4>
@endsection

@section('content')
    <form action="/welcome" method="POST">
      @csrf
      <label for="firstname">Full Name :</label><br /><br />
      <input type="text" name="name" required /><br /><br />
      <label for="gender">Gender</label><br />
      <input type="radio" value="male" name="gender" />
      <label for="male">Male</label><br />
      <input type="radio" value="female" name="gender" />
      <label for="female">Female</label><br /><br />
      <label for="nasionality">Nasionality</label><br />
      <br />
      <select name="nasional">
        <option value="indonesia">Indonesia</option>
        <option value="amerika">Amerika</option>
        <option value="inggris">Inggris</option></select
      ><br /><br />
      <label for="spoken">Language Spoken</label><br />
      <input type="checkbox" name="lang" />Indonesia <br />
      <input type="checkbox" name="lang" />Amerika <br />
      <input type="checkbox" name="lang" />inggris<br /><br />
      <label for="bio">Bio</label><br /><br />
      <textarea name="bio" rows="10" cols="30" id="bio"></textarea><br>
      <input type="submit" name="submit" value="Sign Up" />
    </form>
@endsection