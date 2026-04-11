import { SITE_URL } from '~/consts';

export function absoluteUrl(path: string | URL): string {
  if (path instanceof URL) return path.href;
  if (path.startsWith('http://') || path.startsWith('https://')) return path;
  const base = SITE_URL.replace(/\/$/, '');
  const rel = path.startsWith('/') ? path : `/${path}`;
  return `${base}${rel}`;
}

export function canonicalFrom(url: URL): string {
  const u = new URL(url.pathname, SITE_URL);
  return u.href.replace(/\/$/, '') || SITE_URL;
}
