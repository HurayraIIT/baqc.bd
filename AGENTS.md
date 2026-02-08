# Agents Guide (baqc.bd)

This repo is a pure static site. Optimize for simplicity and performance.

## Repo Layout
- `src/index.html`: Main landing page.
- `src/privacy.html`, `src/terms.html`: Legal pages.
- `src/assets/`: Static assets (images, JS).
  - Note: previous local fonts folder `src/assets/fonts/` has been removed in favor of system fonts.

## Technology Stack
- **HTML5**: Semantic and accessible.
- **CSS**: Tailwind CSS (v4) via CDN.
  - Theme configuration is inline within `<style type="text/tailwindcss">` in HTML files.
- **Fonts**: System font stack (no external font dependencies).
- **Icons**: Inline SVGs (Lucide/Heroicons style). No icon fonts.
- **JS**: Minimal Vanilla JS for mobile menu toggling.

## Development
- **No Build Step**: The site works directly by opening `src/index.html` in a browser.
- **Local Server**: Recommended for testing.
  ```bash
  python3 -m http.server 8000 --directory src
  ```

## Conventions
- **Performance**: Avoid adding new external blocking resources (CSS/JS).
- **Styling**: Use Tailwind utility classes. defined in the inline theme.
- **Icons**: Use raw SVG chips. Do not re-introduce Font Awesome or other icon libraries.
- **Formatting**: Maintain consistent indentation (HTML).

## Deployment
- The `src/` directory is the web root.
