# 🔐 Security Policy

## Supported Versions

We regularly update and maintain this project. Please refer to the latest release for support.

| Version | Supported |
|---------|-----------|
| Latest  | ✅         |
| Older   | ❌         |

---

## Reporting a Vulnerability

If you discover a security vulnerability in this project, **please do not post it publicly**.

Instead, report it directly by emailing:

📧 **ndanusharon7@gmail.com**

We will review your report and take the necessary action as soon as possible. Responsible disclosure is appreciated.

---

## Protecting Sensitive Data

To ensure this project remains secure:
- **Never commit API keys or passwords** directly to the code.
- Use a `.env` file to store secrets, and make sure it is listed in `.gitignore`.
- Refer to variables via `process.env` or equivalent in your language (e.g., `getenv()` in PHP).

---

## Recommended Practices

- Rotate your API keys regularly.
- Avoid hardcoding credentials in your codebase.
- Use version control history scanning tools like [GitGuardian](https://www.gitguardian.com/) to detect leaks.
- Regularly update your dependencies to patch known vulnerabilities.

---

Thank you for helping make this project secure!
