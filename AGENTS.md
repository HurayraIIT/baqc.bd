# Agents Guide (baqc.bd)
This repo is a small static site (no build system committed). Agents should optimize for safe, minimal edits and keep the site working when opened directly or served from a simple static server.

## Repo Layout
- `src/index.html`: main landing page.
- `src/privacy.html`, `src/terms.html`: legal pages.
- `src/assets/js/main.js`: small JS for progressive enhancement.
- `src/assets/images/`: images referenced by HTML.

Tech notes:
- Tailwind is loaded via CDN: `https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4`.
- Fonts via Google Fonts (currently Inter).
- Icons via Font Awesome CDN.
- No `package.json` / `Makefile` / CI config found.

## Local Dev / Build / Lint / Test
### Serve Locally (recommended)
Use any static file server and point it at `src/`.

Python:

```bash
python3 -m http.server 5173 --directory src
```

Then open `http://localhost:5173/`.

### Build

- No build step is configured/required. The site is authored as static HTML and uses CDN Tailwind.
- Do not introduce a bundler/tooling unless the task explicitly asks for it.

### Lint / Format

- No linter/formatter is configured in-repo.
- If you add tooling as part of a task, prefer:
  - Prettier for HTML/JS formatting.
  - ESLint (flat config) for JavaScript rules.

Suggested (optional) commands *if* `package.json` is added later:

```bash
npm run format
npm run lint
```

### Tests

- No test suite is present.
- If you add tests, prefer end-to-end checks with Playwright because this is a static site.

Suggested (optional) commands *if* Playwright is added later:

Run all tests:

```bash
npx playwright test
```

Run a single test file:

```bash
npx playwright test tests/home.spec.ts
```

Run a single test by name (grep):

```bash
npx playwright test -g "mobile menu"
```

Debug one test:

```bash
npx playwright test tests/home.spec.ts --debug
```

## Code Style (Project Conventions)

### General

- Keep changes small and localized; avoid refactors unless requested.
- Preserve the existing visual language: BAQC green/red theme and Tailwind utility approach.
- Prefer progressive enhancement: site should remain usable without JS.
- Avoid introducing new runtime dependencies (frameworks, heavy libraries) unless explicitly required.

### HTML

- Use semantic HTML (`header`, `nav`, `main`, `section`, `footer`) and correct heading hierarchy.
- Accessibility:
  - Ensure interactive elements are buttons/links (not clickable divs).
  - Provide `aria-label` when icon-only links are used.
  - Maintain visible focus states (`focus:ring...`) on interactive elements.
- External links: use `target="_blank"` consistently; add `rel="noopener noreferrer"` when you touch those links.
- Images:
  - Always include meaningful `alt` text (or empty `alt` for purely decorative images).
  - Prefer adding `width`/`height` attributes for layout stability.
- Metadata/SEO:
  - Keep `meta description` accurate.
  - Keep OpenGraph/Twitter cards consistent with site content.
  - If editing JSON-LD, ensure it remains valid JSON.

Formatting:

- Follow the file’s existing indentation style when editing (this repo is not consistently formatted across pages).
- Keep long attribute lists readable (wrap attributes one-per-line when they become hard to scan).

### Tailwind / Styling

- Tailwind is used inline via CDN; avoid adding separate CSS files unless necessary.
- Site theme variables are defined via:
  - `@theme` block inside `<style type="text/tailwindcss">`.
- Prefer Tailwind utilities over custom CSS.
- Keep animations subtle and purposeful; avoid adding many competing motion effects.

### JavaScript

- Plain browser JS only (no frameworks).
- Prefer `const`/`let` (no `var`).
- Keep JS resilient:
  - Guard DOM lookups (check for null before use).
  - Avoid throwing in event handlers; fail gracefully.
- Prefer event delegation only when it reduces complexity.
- Avoid global namespace pollution; wrap code in `DOMContentLoaded` as in `src/assets/js/main.js`.

Error handling guidelines:

- For non-critical enhancements, silently no-op if elements are missing.
- Use `console.error` only for truly unexpected states; avoid noisy logging in production.

### Naming Conventions

- IDs in HTML: kebab-case (e.g. `mobile-menu-btn`).
- JS variables/functions: camelCase.
- CSS variables in `@theme`: `--color-*` and `--font-*` (follow existing pattern).

### Imports / Dependencies

- Prefer CDNs already in use (Tailwind, Font Awesome, Google Fonts).
- If you add a new CDN script:
  - Load it with `defer` when possible.
  - Document why it is needed in the PR/commit message.

## Repo-Specific Gotchas

- `src/index.html` includes both `src/assets/js/main.js` and an inline script for the mobile menu.
  - If you change mobile menu behavior, make sure the two scripts do not conflict.
- Keep paths relative to `src/` (site may be hosted from a subpath).

## Cursor / Copilot Rules

- No Cursor rules found (`.cursor/rules/` or `.cursorrules` not present).
- No GitHub Copilot instructions found (`.github/copilot-instructions.md` not present).
