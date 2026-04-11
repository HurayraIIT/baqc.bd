import { getCollection, type CollectionEntry } from 'astro:content';

export type BlogEntry = CollectionEntry<'blog'>;

export function sortByPubDateDesc(a: BlogEntry, b: BlogEntry): number {
  return b.data.pubDate.getTime() - a.data.pubDate.getTime();
}

export async function getPublishedPosts(): Promise<BlogEntry[]> {
  const all = await getCollection('blog', ({ data }) =>
    import.meta.env.PROD ? !data.draft : true,
  );
  return all.sort(sortByPubDateDesc);
}

export function getReadingTime(text: string): number {
  const words = text.trim().split(/\s+/).length;
  return Math.max(1, Math.round(words / 220));
}

export function formatPostDate(date: Date, locale = 'en-BD'): string {
  return new Intl.DateTimeFormat(locale, {
    day: 'numeric',
    month: 'long',
    year: 'numeric',
  }).format(date);
}

export function uniqueTags(posts: BlogEntry[]): string[] {
  const set = new Set<string>();
  for (const post of posts) {
    for (const tag of post.data.tags) set.add(tag);
  }
  return [...set].sort((a, b) => a.localeCompare(b));
}
