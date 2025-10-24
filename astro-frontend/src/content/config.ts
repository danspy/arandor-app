import { z, defineCollection } from 'astro:content';

const homeCollection = defineCollection({
  type: 'data',
  schema: z.object({
    title: z.string(),
    text: z.string(),
    levelprogress: z.number(),
    currentlevel: z.number(),
    nextlevel: z.number(),
    rulikselect: z.string(),
    rulikprogress: z.number(),
    irilethselect: z.string(),
    irilethprogress: z.number(),
    mardunienselect: z.string(),
    mardunienprogress: z.number(),
    sianischelandeselect: z.string(),
    sianischelandeprogress: z.number(),
    regusanienselect: z.string(),
    regusanienprogress: z.number(),
    kongdonienselect: z.string(),
    kongdonienprogress: z.number(),
    accordion: z.array(z.object({
      title: z.string(),
      questcontent: z.string(),
      queststatusselect: z.string(),
    })),
  }),
});

const charactersCollection = defineCollection({
  type: 'data',
  schema: z.object({
    title: z.string(),
    characterid: z.string().optional(),
    text: z.string().optional(),
  }),
});

const diaryCollection = defineCollection({
  type: 'data',
  schema: z.object({
    title: z.string(),
    subheadline: z.string().optional(),
    text: z.string(),
    community: z.string().optional(),
  }),
});

const npcsCollection = defineCollection({
  type: 'data',
  schema: z.object({
    title: z.string(),
    text: z.string().optional(),
  }),
});

export const collections = {
  'home': homeCollection,
  'characters': charactersCollection,
  'diary': diaryCollection,
  'npcs': npcsCollection,
};
