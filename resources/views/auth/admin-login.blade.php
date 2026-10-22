<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in · WAWA Admin</title>
    <style>
        :root { color-scheme: light; font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        * { box-sizing: border-box; }
        body { background: #f2f6f3; color: #17241d; display: grid; margin: 0; min-height: 100vh; place-items: center; padding: 24px; }
        .login-shell { background: #fff; border: 1px solid #e2ebe5; border-radius: 22px; box-shadow: 0 24px 70px rgba(18, 53, 34, .10); display: grid; grid-template-columns: 1fr 1fr; max-width: 900px; overflow: hidden; width: 100%; }
        .login-aside { background: linear-gradient(145deg, #143b2b, #208155); color: #fff; display: flex; flex-direction: column; justify-content: space-between; min-height: 510px; padding: 42px; }
        .brand { align-items: center; display: flex; gap: 12px; font-size: 17px; font-weight: 750; letter-spacing: -.03em; }
        .brand img { background: #fff; border-radius: 9px; height: 40px; object-fit: contain; padding: 5px; width: 54px; }
        .aside-copy h1 { font-size: clamp(28px, 4vw, 40px); letter-spacing: -.045em; line-height: 1.12; margin: 0 0 14px; max-width: 350px; }
        .aside-copy p { color: rgba(255,255,255,.76); line-height: 1.65; margin: 0; max-width: 330px; }
        .aside-foot { color: rgba(255,255,255,.65); font-size: 12px; }
        .login-form { align-self: center; padding: 48px; }
        .eyebrow { color: #218254; font-size: 11px; font-weight: 750; letter-spacing: .13em; text-transform: uppercase; }
        h2 { font-size: 28px; letter-spacing: -.04em; margin: 8px 0 7px; }
        .intro { color: #748179; font-size: 14px; line-height: 1.5; margin: 0 0 28px; }
        label { display: block; font-size: 13px; font-weight: 650; margin: 16px 0 7px; }
        input { border: 1px solid #dce7df; border-radius: 9px; font: inherit; min-height: 46px; outline: none; padding: 0 13px; transition: border-color .18s, box-shadow .18s; width: 100%; }
        input:focus { border-color: #318e5d; box-shadow: 0 0 0 3px rgba(49,142,93,.13); }
        button { background: #18794e; border: 0; border-radius: 9px; color: white; cursor: pointer; font: inherit; font-size: 14px; font-weight: 700; margin-top: 24px; min-height: 47px; width: 100%; }
        button:hover { background: #12613e; }
        .error { background: #fff0ee; border-radius: 8px; color: #a23528; font-size: 13px; margin: 14px 0; padding: 11px 12px; }
        @media (max-width: 680px) { .login-shell { grid-template-columns: 1fr; max-width: 460px; } .login-aside { min-height: auto; padding: 25px; } .aside-copy { margin: 32px 0 22px; } .aside-copy h1 { font-size: 28px; } .aside-foot { display: none; } .login-form { padding: 32px 25px; } }
    </style>
</head>
<body>
    <main class="login-shell">
        <aside class="login-aside">
            <div class="brand"><img src="{{ asset('uploads/logo.png') }}" alt=""><span>WAWA Admin</span></div>
            <div class="aside-copy">
                <h1>Your website, under control.</h1>
                <p>Manage products, stories and the details customers see across the WAWA Fitness Center website.</p>
            </div>
            <div class="aside-foot">WAWA Fitness Center · Website management</div>
        </aside>
        <section class="login-form">
            <span class="eyebrow">Admin portal</span>
            <h2>Welcome back</h2>
            <p class="intro">Sign in to continue to your dashboard.</p>

            @if($errors->any())
                <div class="error" role="alert">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ url('/login-admin') }}">
                @csrf
                <label for="email">Email address</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="username" required autofocus>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" autocomplete="current-password" required>
                <button type="submit">Sign in to dashboard <span aria-hidden="true">→</span></button>
            </form>
        </section>
    </main>
</body>
</html>
