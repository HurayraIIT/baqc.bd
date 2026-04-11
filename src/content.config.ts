import { defineCollection, z } from 'astro:content';
import { glob, file } from 'astro/loaders';

const blog = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/blog' }),
  schema: ({ image }) =>
    z
      .object({
        title: z.string().min(10).max(80),
        description: z.string().min(60).max(200),
        pubDate: z.coerce.date(),
        updatedDate: z.coerce.date().optional(),
        author: z.string(),
        tags: z.array(z.string()).default([]),
        cover: image().optional(),
        coverAlt: z.string().optional(),
        draft: z.boolean().default(false),
      })
      .refine((d) => !d.cover || (d.cover && d.coverAlt && d.coverAlt.length > 0), {
        message: 'coverAlt is required when cover is set',
        path: ['coverAlt'],
      }),
});

const events = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/events' }),
  schema: ({ image }) =>
    z
      .object({
        title: z.string().min(5).max(120),
        description: z.string().min(40).max(220),
        startDate: z.coerce.date(),
        endDate: z.coerce.date().optional(),
        location: z.string(),
        venue: z.string().optional(),
        isOnline: z.boolean().default(false),
        registrationUrl: z.string().url().optional(),
        cover: image().optional(),
        coverAlt: z.string().optional(),
      })
      .refine((d) => !d.cover || (d.cover && d.coverAlt && d.coverAlt.length > 0), {
        message: 'coverAlt is required when cover is set',
        path: ['coverAlt'],
      }),
});

const team = defineCollection({
  loader: file('./src/content/team/members.json'),
  schema: ({ image }) =>
    z.object({
      name: z.string(),
      role: z.string(),
      bio: z.string(),
      avatar: image(),
      avatarAlt: z.string(),
      social: z
        .object({
          github: z.string().url().optional(),
          linkedin: z.string().url().optional(),
          x: z.string().url().optional(),
          website: z.string().url().optional(),
        })
        .default({}),
      order: z.number().default(99),
    }),
});

const pages = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/pages' }),
  schema: z.object({
    title: z.string(),
    description: z.string(),
    updatedDate: z.coerce.date().optional(),
  }),
});

export const collections = { blog, events, team, pages };
