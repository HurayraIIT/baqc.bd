import rss from '@astrojs/rss';
import type { APIContext } from 'astro';
import { getPublishedPosts } from '~/lib/blog';
import { SITE_TITLE, SITE_DESCRIPTION } from '~/consts';

export async function GET(context: APIContext) {
  const posts = await getPublishedPosts();
  return rss({
    title: SITE_TITLE,
    description: SITE_DESCRIPTION,
    site: context.site ?? 'https://baqc.bd',
    items: posts.map((post) => ({
      title: post.data.title,
      description: post.data.description,
      pubDate: post.data.pubDate,
      link: `/blog/${post.id}`,
      author: post.data.author,
      categories: post.data.tags,
    })),
    customData: '<language>en-bd</language>',
    stylesheet: false,
  });
}
