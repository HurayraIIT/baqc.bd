# Agents Guide (baqc.bd)

This repo is a pure static site. Optimize for simplicity and performance.

## Repo Layout
- `src/public/index.php`: Main landing page (PHP).
- `src/public/assets/`: Static assets (images, JS, CSS).
- `src/includes/`: PHP templates, partials, and SVGs (outside web root).
- `src/input.css`: Tailwind CSS source file.

## Technology Stack
- **HTML5**: Semantic and accessible (served via PHP).
- **PHP**: Modular structure for easier maintenance.
- **CSS**: Tailwind CSS (v3) via npm build process.
- **Fonts**: System font stack (no external font dependencies).
- **Icons**: Inline SVGs (Lucide/Heroicons style) included via PHP.
- **JS**: Vanilla JS for interactive elements (mobile menu).

## Development
- **Setup**:
  ```bash
  npm install
  ```
- **Build CSS**:
  ```bash
  npm run build
  # Or for development:
  npm run dev
  ```
- **Local Server**:
  ```bash
  php -S localhost:8000 -t src/public
  ```

## Conventions
- **Performance**: Avoid adding new external blocking resources (CSS/JS).
- **Styling**: Use Tailwind utility classes. defined in the inline theme.
- **Icons**: Use raw SVG chips. Do not re-introduce Font Awesome or other icon libraries.
- **Formatting**: Maintain consistent indentation (HTML).

## Deployment
- The `src/` directory is the web root.
