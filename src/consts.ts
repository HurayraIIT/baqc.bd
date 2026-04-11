export const SITE_URL = 'https://baqc.bd';
export const SITE_TITLE = 'BAQC — Bangladesh Aspiring QA Community';
export const SITE_SHORT_TITLE = 'BAQC';
export const SITE_DESCRIPTION =
  'Bangladesh Aspiring QA Community — a home for aspiring and early-career QA engineers in Bangladesh to learn, share, and grow together.';
export const SITE_LOCALE = 'en';
export const SITE_LANG = 'en-BD';

export const CONTACT_EMAIL = 'hello@baqc.bd';

export const SOCIAL_LINKS = {
  github: 'https://github.com/baqc-bd',
  facebook: 'https://www.facebook.com/baqc.bd',
  linkedin: 'https://www.linkedin.com/company/baqc-bd',
  x: 'https://x.com/baqc_bd',
  youtube: 'https://www.youtube.com/@baqc-bd',
  discord: '',
} as const;

export const NAV_LINKS = [
  { href: '/', label: 'Home' },
  { href: '/events', label: 'Events' },
  { href: '/blog', label: 'Blog' },
  { href: '/team', label: 'Team' },
  { href: '/about', label: 'About' },
  { href: '/contact', label: 'Contact' },
] as const;

export const FOOTER_LEGAL_LINKS = [
  { href: '/legal/privacy', label: 'Privacy' },
  { href: '/legal/terms', label: 'Terms' },
  { href: '/legal/code-of-conduct', label: 'Code of Conduct' },
] as const;
