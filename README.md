# baqc.bd

The official website for **BAQC — Bangladesh Aspiring QA Community**, served at <https://baqc.bd>.

A volunteer-run community for aspiring and early-career quality engineers in Bangladesh. This site is open source and built by the community.

---

## Table of contents

- [What this project uses](#what-this-project-uses)
- [Before you start](#before-you-start)
- [Step 1 — Install Node.js 22](#step-1--install-nodejs-22)
- [Step 2 — Install pnpm](#step-2--install-pnpm)
- [Step 3 — Clone this repository](#step-3--clone-this-repository)
- [Step 4 — Install the project](#step-4--install-the-project)
- [Step 5 — Run the site on your computer](#step-5--run-the-site-on-your-computer)
- [Common problems](#common-problems)
- [How to contribute](#how-to-contribute)
- [Project structure](#project-structure)
- [Deployment](#deployment)
- [License](#license)

---

## What this project uses

You don't need to know any of this to run the site, but if you're curious:

- [**Astro**](https://astro.build) — a modern framework for building fast websites
- **TypeScript** — JavaScript with type checking
- **Tailwind CSS v4** — utility-first styling
- **MDX** — Markdown with the ability to embed components
- Hosted on **Cloudflare Pages**

---

## Before you start

You'll need three things on your computer:

1. **A code editor.** We recommend [Visual Studio Code](https://code.visualstudio.com/) — it's free.
2. **Node.js 22** — the JavaScript runtime this project builds with (see Step 1 below).
3. **pnpm** — a fast package manager (see Step 2 below).

You'll also need a **terminal** (also called "command line"):

- **macOS** — press `Cmd + Space`, type `Terminal`, and press Enter.
- **Windows** — press the Windows key, type `PowerShell`, and press Enter.
- **Linux** — press `Ctrl + Alt + T`, or search for "Terminal" in your apps.

Throughout this guide, when you see a code block, **copy the line and paste it into your terminal, then press Enter.**

---

## Step 1 — Install Node.js 22

Node.js is what runs the build tools for this project. We specifically need **version 22**.

The easiest way to install Node.js is to use a version manager called **nvm**, so you can always switch between versions if other projects need a different one.

### On macOS or Linux

Open your terminal and run this command to install nvm:

```bash
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.1/install.sh | bash
```

**Close and reopen your terminal** so it picks up the new tool, then install Node.js 22:

```bash
nvm install 22
nvm use 22
```

Verify it worked:

```bash
node -v
```

You should see something like `v22.x.x`.

### On Windows

1. Download the installer from [**nvm-windows releases**](https://github.com/coreybutler/nvm-windows/releases) — get the file named `nvm-setup.exe` from the latest release.
2. Run the installer and accept the defaults.
3. **Close and reopen PowerShell** (important — the new command won't work in the old window).
4. Run these commands:

```powershell
nvm install 22
nvm use 22
node -v
```

You should see something like `v22.x.x`.

### Prefer not to use nvm?

If you just want to install Node.js directly without a version manager, download the LTS installer from <https://nodejs.org/> — pick the "22.x.x LTS" option for your operating system. This works, but you won't be able to easily switch versions later.

---

## Step 2 — Install pnpm

**pnpm** is the package manager this project uses (instead of `npm` or `yarn`). Once you have Node.js installed, pnpm is one command away.

### The easy way (all platforms)

Node.js 22 comes with a built-in tool called `corepack` that can install pnpm for you. In your terminal, run:

```bash
corepack enable
corepack prepare pnpm@latest --activate
```

Verify it worked:

```bash
pnpm -v
```

You should see a version number like `10.x.x`.

### Alternative installation methods

If `corepack` doesn't work for you, here are backup options:

**macOS (with Homebrew):**

```bash
brew install pnpm
```

**Windows (with PowerShell):**

```powershell
iwr https://get.pnpm.io/install.ps1 -useb | iex
```

**Any platform (using npm, which comes with Node.js):**

```bash
npm install -g pnpm
```

After installing, **close and reopen your terminal**, then run `pnpm -v` to confirm it's working.

> 📚 Full pnpm installation docs: <https://pnpm.io/installation>

---

## Step 3 — Clone this repository

"Cloning" means downloading a copy of the project to your computer using **git**.

First, check if you have git:

```bash
git --version
```

If you see a version number, you're good. If you see "command not found", install git from <https://git-scm.com/downloads> and come back.

Now clone the project. Pick a folder where you keep your coding projects (e.g. `~/Projects` on macOS/Linux or `C:\Projects` on Windows) and run:

```bash
git clone https://github.com/HurayraIIT/baqc.bd.git
cd baqc.bd
```

The `cd baqc.bd` command moves into the project folder. Every command from here on should be run inside this folder.

---

## Step 4 — Install the project

This downloads all the libraries the project depends on. From inside the `baqc.bd` folder, run:

```bash
pnpm install
```

This may take **1–2 minutes the first time.** You'll see a progress bar and a lot of output — that's normal. When it's done, you'll see a summary at the bottom.

---

## Step 5 — Run the site on your computer

Now the fun part. Start the development server:

```bash
pnpm dev
```

You'll see something like:

```
  🚀  astro  v6.1.5 ready in 420 ms

  ┃ Local    http://localhost:4321/
  ┃ Network  use --host to expose
```

**Open that `http://localhost:4321/` link in your web browser.** You should see the BAQC homepage.

While `pnpm dev` is running, any file you edit in the project will automatically reload in your browser. When you're done, go back to your terminal and press `Ctrl + C` to stop the server.

### Other useful commands

Run these from inside the `baqc.bd` folder:

| Command             | What it does                                                                 |
| ------------------- | ---------------------------------------------------------------------------- |
| `pnpm dev`          | Start the development server (live reload). Stop with `Ctrl + C`.            |
| `pnpm build`        | Build the production version into `dist/`. This also type-checks everything. |
| `pnpm preview`      | Preview the production build locally (run after `pnpm build`).               |
| `pnpm format`       | Auto-format all files.                                                       |
| `pnpm format:check` | Check if anything needs formatting without changing files.                   |

---

## Common problems

### `command not found: pnpm`

pnpm isn't installed, or your terminal was opened before it was installed. Close and reopen your terminal and try again. If that doesn't fix it, repeat [Step 2](#step-2--install-pnpm).

### `command not found: nvm` (after installing nvm)

Close and reopen your terminal. If it still doesn't work, you may need to add nvm to your shell config manually — see <https://github.com/nvm-sh/nvm#installing-and-updating>.

### `node: command not found`

Node.js isn't installed or isn't on your PATH. Repeat [Step 1](#step-1--install-nodejs-22).

### Port 4321 is already in use

Another program is using that port. Stop the other program, or tell Astro to use a different port:

```bash
pnpm dev --port 3000
```

### `pnpm install` fails with peer dependency warnings

This is usually safe to ignore — the project is tested and working. If you see actual errors (not warnings), copy the error message and open an issue on GitHub.

### Something else?

Open an issue: <https://github.com/HurayraIIT/baqc.bd/issues> — paste the exact error message you're seeing.

---

## How to contribute

All content on this site is written in plain Markdown files. You don't need to touch any code to add a blog post, event, or team member.

### Add a blog post

1. Create a new file: `src/content/blog/your-post-slug.mdx` (use dashes, no spaces).
2. Paste this at the top of the file:

```yaml
---
title: 'Your post title'
description: 'A short hook — 1 to 2 sentences. Also shows up in search engines.'
pubDate: 2026-05-01
author: 'Your name'
tags: ['testing', 'community']
---
```

3. Write your post below, using Markdown. You can see a working example in [`src/content/blog/welcome-to-baqc.mdx`](src/content/blog/welcome-to-baqc.mdx).
4. Run `pnpm dev` to preview it at `http://localhost:4321/blog/your-post-slug`.
5. Commit and open a pull request.

### Add an event

1. Create `src/content/events/your-event-slug.mdx`.
2. Paste this at the top:

```yaml
---
title: 'Event title'
description: 'One-paragraph hook.'
startDate: 2026-06-15T15:00:00+06:00
endDate: 2026-06-15T18:00:00+06:00
location: 'Dhaka' # or "Online"
venue: 'TBA'
isOnline: false
registrationUrl: 'https://...' # optional — delete this line if there's no link
---
```

3. Write the event description in Markdown below.
4. **"Upcoming" vs "Past" is automatic** — it's based on the `startDate` compared to today. You don't need to set a status field.

### Add a team member

Edit [`src/content/team/members.json`](src/content/team/members.json) and add your entry. Each person needs an avatar image in `src/assets/team/` — an SVG with initials works great as a placeholder.

### Edit an existing page (About, Privacy, Terms, Code of Conduct)

These live in [`src/content/pages/`](src/content/pages/) as Markdown files. Edit them directly.

---

## Project structure

A quick map of the folders, for the curious:

```
src/
├── assets/         Images used on the site
├── components/     Reusable building blocks (headers, cards, etc.)
├── content/        Blog posts, events, team, pages (Markdown)
├── layouts/        Page templates
├── lib/            Helper functions
├── pages/          Each file here becomes a page on the site
├── styles/         CSS (design tokens and Tailwind)
└── consts.ts       Site-wide constants (name, social links, nav)
public/             Static files served as-is (favicon, robots.txt)
astro.config.mjs    Astro configuration
```

---

## Deployment

This site deploys automatically to **Cloudflare Pages** whenever code is pushed to the `main` branch. Pull requests get their own preview deploys.

- Build command: `pnpm build`
- Build output: `dist/`
- Node version: `22` (set in `.nvmrc` and in the Cloudflare Pages dashboard)

You don't need to do anything manual to deploy — just merge your PR.

---

## License

- **Code:** [MIT](./LICENSE)
- **Content** (blog posts, page text, branding): © BAQC. Quote and link with attribution; no wholesale republishing.

---

## Contact

- Email: `hello@baqc.bd`
- See the [contact page](https://baqc.bd/contact) for all our community channels.

Still stuck? Open an issue on GitHub and one of the organizers will help: <https://github.com/HurayraIIT/baqc.bd/issues>
