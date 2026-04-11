# baqc.bd

The official landing site for **BAQC — Bangladesh Aspiring QA Community**, served at <https://baqc.bd>.

A volunteer-run community for aspiring and early-career quality engineers in Bangladesh. This site is open source and built by the community.

## Tech stack

- [Astro](https://astro.build) (latest, v6+) — static site generator
- TypeScript (strict mode)
- [Tailwind CSS v4](https://tailwindcss.com) via `@tailwindcss/vite`
- Content Collections (Content Layer API) with Zod schemas
- MDX for blog posts and pages
- View transitions via `<ClientRouter />`
- Hosted on **Cloudflare Pages**

The full PRD and architectural decisions are documented in [`docs/PRD.md`](./docs/PRD.md) (or in `/Users/hurayra/.claude/plans/cozy-strolling-kitten.md` during active development).

## Quickstart

You'll need:

- **Node.js 22 LTS** (see [`.nvmrc`](./.nvmrc))
- **pnpm** 10+

```bash
# Clone and install
git clone https://github.com/baqc-bd/baqc.bd.git
cd baqc.bd
nvm use   # picks up .nvmrc
pnpm install

# Run the dev server
pnpm dev          # http://localhost:4321/

# Build for production
pnpm build        # runs `astro check` then `astro build` → dist/

# Preview the production build
pnpm preview

# Format
pnpm format
pnpm format:check
```

## Project structure

```
src/
├── assets/         Images processed by astro:assets
├── components/
│   ├── blog/       Blog cards, meta, tags
│   ├── events/     Event cards, timeline, status badge
│   ├── home/       Hero, NextEventCard, LatestPosts
│   ├── layout/     Header, Footer, Nav
│   ├── seo/        BaseHead, JsonLd
│   ├── team/       MemberCard, TeamGrid
│   └── ui/         Reusable primitives
├── content/
│   ├── blog/       One .mdx per post
│   ├── events/     One .mdx per event
│   ├── pages/      About, legal MDX bodies
│   └── team/       members.json
├── content.config.ts   Collection schemas (Zod)
├── layouts/        BaseLayout, BlogPostLayout, EventLayout
├── lib/            events, blog, seo helpers
├── pages/          File-based routes (no [lang] segment — single locale)
├── styles/         tokens.css, global.css (Tailwind v4)
└── consts.ts       SITE, SOCIAL, NAV
```

## Contributing

### Adding a blog post

1. Create `src/content/blog/<slug>.mdx`
2. Frontmatter (required fields):

```yaml
---
title: 'Your post title (10–80 chars)'
description: 'Hook (60–200 chars). Also feeds the meta description and OG card.'
pubDate: 2026-04-15
author: 'Your name'
tags: ['testing', 'community']
---
```

Optional: `updatedDate`, `cover` (image import path) + `coverAlt`, `draft: true` to keep it out of production builds.

3. Write the post in Markdown. Open a PR. Done.

### Adding an event

1. Create `src/content/events/<slug>.mdx`
2. Frontmatter:

```yaml
---
title: 'Event title'
description: 'One-paragraph hook.'
startDate: 2026-06-15T15:00:00+06:00
endDate: 2026-06-15T18:00:00+06:00
location: 'Dhaka' # or "Online"
venue: 'TBA'
isOnline: false
registrationUrl: 'https://...' # optional
---
```

**Upcoming vs past is automatic** — based on `startDate` vs today. No manual `status` field to keep stale.

### Adding a team member

Edit `src/content/team/members.json`. Each entry needs an avatar in `src/assets/team/`. SVG initials work great as placeholders.

### Editing about / legal pages

Edit `src/content/pages/about.mdx`, `privacy.mdx`, `terms.mdx`, or `code-of-conduct.mdx`.

## Deployment

This site deploys automatically to **Cloudflare Pages** on push to `main`.

- Build command: `pnpm build`
- Build output: `dist`
- Node version: `22` (set both via `.nvmrc` and the `NODE_VERSION=22` env var in the Pages dashboard)
- No Astro adapter — fully static
- Custom domain: `baqc.bd`
- Analytics: Cloudflare Web Analytics (cookieless, automatic)

PRs get preview deploys automatically.

## The Lighthouse-100 contract

Every public route on this site is expected to score **100/100/100/100** on Lighthouse (mobile profile, simulated throttling) for Performance, Accessibility, Best Practices, and SEO.

Before merging anything visual or new, run Lighthouse locally on `pnpm preview` and verify all four scores stay at 100. Common pitfalls and fixes are documented in the PRD §7.

## License

- **Source code:** [MIT](./LICENSE)
- **Content** (blog posts, page copy, branding): © BAQC. Quote and link freely with attribution; no wholesale republishing.

## Contact

- Email: `hello@baqc.bd`
- See the [contact page](https://baqc.bd/contact) for all our channels.
