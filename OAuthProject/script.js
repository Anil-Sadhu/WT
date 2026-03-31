function googleLogin() {
    const clientId = "YOUR_GOOGLE_CLIENT_ID";
    const redirectUri = "http://localhost/callback.html";

    const url = `https://accounts.google.com/o/oauth2/v2/auth?
    client_id=${clientId}
    &redirect_uri=${redirectUri}
    &response_type=token
    &scope=email profile`;

    window.location.href = url;
}

function githubLogin() {
    const clientId = "YOUR_GITHUB_CLIENT_ID";
    const redirectUri = "http://localhost/callback.html";

    const url = `https://github.com/login/oauth/authorize?
    client_id=${clientId}
    &redirect_uri=${redirectUri}`;

    window.location.href = url;
}