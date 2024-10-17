<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <h1> this is user form</h1>
    <form method="post" action="addUser">
        @csrf
        <div>
            <input placeholder="Enter username" type="text" name="username"/>
        </div>
        <br />
        <div>
            <input placeholder="Enter email" type="email" name="email"/>
        </div>
        <br />
        <div>
            <input placeholder="Enter password" type="password" name="password"/>
        </div>
        <br />
        <button type="submit">Submit</button>
    </form>
</div>