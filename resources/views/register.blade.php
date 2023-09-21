<h2>
    Register
    <form action="/register" method="post">
        <label for = "email">
            <b>Email Address</b>
        </label>
        <input type = "email" placeholder = "Has to end with '@gmail.com'" name = "email" required>
        
        <label for = "username">
            <b>Username</b>
        </label>
        <input type = "username" placeholder = "Minimum 5 Characters, Maximum 50 Characters">
        
        <label for = "password">
            <b>Password</b>
        </label>
        <input type = "password" placeholder = "Minimum 5 Characters, Maximum 255 Characters">
        
        <label for = "conPassword">
            <b>Confirm Password</b>
        </label>
        <input type = "conPassword" placeholder = "Has to be the same with Password Field">
        
        <button type = "submit">
            Register
        </button>
    </form>
    <h5>
        Already have an account? Login
    </h5>
</h2>