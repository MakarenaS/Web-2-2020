{include file="header.tpl"}

    {include file="sideMenu.tpl"}

        <section id="main" class="mainContent">
            <h1>{$titulo_s}</h1>

    <form action="#">

        <h2>Login</h2>

        <div class="input">

            <div class="inputBox">
                <label>Username</label>
                <input type="text" name="" placeholder="examply@xyz.com">
            </div>

            <div class="inputBox">
                <label>Password</label>
            
                <input type="text" name="" placeholder="xxxx">
            
            </div>
            
            <div class="inputBox">
                <input type="submit" name="" value="Sign In">
            </div>
        </div>
        <p class="forgot">Forgot Password?<a href="#">Click here</a></p>
    
    </form>

    </section>

{include file="footer.tpl"}