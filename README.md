# BAQC.bd - Bangladesh Aspiring QA Community

Welcome to the official repository for the [BAQC](https://baqc.bd) landing page. This project is a lightweight, high-performance static website designed to showcase the community's mission, workshops, and benefits.

## 🚀 Features

- **Modern UI/UX**: Built with Tailwind CSS (v4) for a clean, responsive design.
- **Performance Focused**: 
  - Zero external font requests (uses System Fonts).
  - Zero icon font requests (uses inline SVGs).
  - Minimal render-blocking resources.
- **Accessible**: Semantic HTML and widespread use of ARIA labels.
- **SEO Optimized**: Meta tags for Open Graph, Twitter Cards, and JSON-LD structured data.

## 🛠️ Tech Stack

- **HTML5**
- **Tailwind CSS** (via CDN for simplicity)
- **Vanilla JavaScript** (ES6+)

## 💻 Local Development

No build tools or Node.js required!

1.  **Clone the repository**:
    ```bash
    git clone https://github.com/HurayraIIT/baqc.bd.git
    cd baqc.bd
    ```

2.  **Run locally**:
    You can simply open `src/index.html` in your browser, or use a simple HTTP server:

    ```bash
    # Python 3
    python3 -m http.server 8000 --directory src
    ```

    Then verify at `http://localhost:8000`.

## 📁 Project Structure

```
.
├── src/
│   ├── index.html        # Main Landing Page
│   ├── privacy.html      # Privacy Policy
│   ├── terms.html        # Terms of Service
│   └── assets/
│       ├── css/          # (Empty/Minimal) Custom styles if needed
│       ├── images/       # Static images
│       └── js/           # Main logic (mobile menu)
└── README.md
```

## 🤝 Contributing

1.  Fork the repository.
2.  Create your feature branch (`git checkout -b feature/AmazingFeature`).
3.  Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4.  Push to the branch (`git push origin feature/AmazingFeature`).
5.  Open a Pull Request.

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---
&copy; 2026 Bangladesh Aspiring QA Community.
