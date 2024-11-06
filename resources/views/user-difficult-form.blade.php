<div style="background-color:#aaa; height:90vh">
<h2>i will show user form here</h2>

<form method="post" action="addUser">
    @csrf
<input type="checkbox" value="php" name="skill[]" id="php"/> <label  for="php" >php</label>
<input type="checkbox" value="python" name="skill[]" id="python"/> <label  for="python" >python</label>
<input type="checkbox" value="java" name="skill[]" id="java"/> <label  for="java" >java</label>
<button type="submit">submit</button>
</form>
</div>
