# Agents Guide (baqc.bd)

This repo is a pure static site. Optimize for simplicity and performance.

## Repo Layout
- `src/public/index.php`: Main landing page (PHP).
- `src/public/assets/`: Static assets (images, JS).
- `src/includes/`: PHP templates, partials, and SVGs (outside web root).

## Technology Stack
- **HTML5**: Semantic and accessible (served via PHP).
- **PHP**: Modular structure for easier maintenance.
- **CSS**: Tailwind CSS (v4) via CDN.
  - Theme configuration is inline within `<style type="text/tailwindcss">` in HTML files.
- **Fonts**: System font stack (no external font dependencies).
- **Icons**: Inline SVGs (Lucide/Heroicons style) included via PHP. No icon fonts.
- **JS**: Minimal Vanilla JS for mobile menu toggling.

## Development
- **Local Server**: Required for PHP.
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
