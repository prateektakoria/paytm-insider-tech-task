<h1>Quick Setup for this Project</h1>
<p>
    <ul>
        <li>Run git clone https://github.com/prateektakoria/paytm-insider-tech-task.git laravel-admin</li>
        <li>From the projects root run <code>cp .env.example .env</code></li>
        <li>Configure your <code>.env</code> file</li>
        <li>Run <code>composer update</code> from the project's root folder</li>
        <li>From the projects root folder run <code>php artisan key:generate</code></li>
        <li>From the projects root folder run <code>php artisan migrate</code></li>
        <li>From the projects root folder run <code>php artisan serve</code></li>
        <li>Now run the assigned URL in your browser. Everything is setup on the root url.</li>
        e.g. localhost:8000/
    </ul>
</p>

<h1>API Endpoints</h1>
<h3>GET: /api/clubs</h3>
<p>You’ll get a list of all the groups after hitting this endpoint. You have to send the api_token as an Authorization header.
</p>

<h3>POST: /api/register</h3>
<p>
    <b>Here’s what we get when we hit this endpoint:</b>
<pre>
    $ curl -X POST http://localhost:8000/api/register \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{"name": "Prateek Saini", "email": "admin@example.com", "password": "12345678", "password_confirmation": "12345678"}'
    {
        "data": {        
            "api_token":"0syHnl0Y9jOIfszq11EC2CBQwCfObmvscrZYo5o2ilZPnohvndH797nDNyAT",
            "created_at": "2019-08-20 21:17:15",
            "email": "admin@example.com",
            "id": 51,
            "name": "Prateek Saini",
            "updated_at": "2019-08-20 21:17:15"
        }
    }
</pre>
</p>

<h3>POST: /api/login</h3>
<p>
    <b>Here’s what we get when we hit this endpoint:</b>
    <pre>
        $ curl -X POST localhost:8000/api/login \
        -H "Accept: application/json" \
        -H "Content-type: application/json" \
        -d "{\"email\": \"admin@example.com\", \"password\": \"12345678\" }"
        {
            "data": {
                "id":1,
                "name":"Prateek Saini",
                "email":"admin@example.com",
                "created_at":"2017-04-25 01:05:34",
                "updated_at":"2017-04-25 02:50:40",
                "api_token":"Jll7q0BSijLOrzaOSm5Dr5hW9cJRZAJKOzvDlxjKCXepwAeZ7JR6YP5zQqnw"
            }
        }
    </pre>
</p>

<h3>POST: /api/logout</h3>
<p>
    <b>Here’s what we get when we hit this endpoint:</b>
    <pre>
        $ curl -X POST http://localhost:8000/api/logout \
        -H "Accept: application/json" \
        -H "Content-Type: application/json" \
        -H "Authorization: Bearer 0syHnl0Y9jOIfszq11EC2CBQwCfObmvscrZYo5o2ilZPnohvndH797nDNyAT" \
        {
            "data": {        
                "User Logged Out."
            }
        }
    </pre>
</p>
