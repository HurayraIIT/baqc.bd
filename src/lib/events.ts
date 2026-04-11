import { getCollection, type CollectionEntry } from 'astro:content';

export type EventEntry = CollectionEntry<'events'>;

export function isUpcoming(entry: EventEntry, now: Date = new Date()): boolean {
  const end = entry.data.endDate ?? entry.data.startDate;
  return end.getTime() >= now.getTime();
}

export function sortByStartAsc(a: EventEntry, b: EventEntry): number {
  return a.data.startDate.getTime() - b.data.startDate.getTime();
}

export function sortByStartDesc(a: EventEntry, b: EventEntry): number {
  return b.data.startDate.getTime() - a.data.startDate.getTime();
}

export async function getAllEvents(): Promise<EventEntry[]> {
  return await getCollection('events');
}

export interface SplitEvents {
  upcoming: EventEntry[];
  past: EventEntry[];
}

export function splitUpcomingPast(entries: EventEntry[], now: Date = new Date()): SplitEvents {
  const upcoming: EventEntry[] = [];
  const past: EventEntry[] = [];
  for (const entry of entries) {
    if (isUpcoming(entry, now)) upcoming.push(entry);
    else past.push(entry);
  }
  upcoming.sort(sortByStartAsc);
  past.sort(sortByStartDesc);
  return { upcoming, past };
}

export async function getNextEvent(): Promise<EventEntry | undefined> {
  const all = await getAllEvents();
  const { upcoming } = splitUpcomingPast(all);
  return upcoming[0];
}

export function formatEventDate(
  start: Date,
  end?: Date,
  locale = 'en-BD',
  timeZone = 'Asia/Dhaka',
): string {
  const fmt = new Intl.DateTimeFormat(locale, {
    weekday: 'short',
    day: 'numeric',
    month: 'short',
    year: 'numeric',
    hour: 'numeric',
    minute: '2-digit',
    timeZone,
    timeZoneName: 'short',
  });
  if (!end) return fmt.format(start);
  if (start.toDateString() === end.toDateString()) {
    const dayPart = new Intl.DateTimeFormat(locale, {
      weekday: 'short',
      day: 'numeric',
      month: 'short',
      year: 'numeric',
      timeZone,
    }).format(start);
    const timeFmt = new Intl.DateTimeFormat(locale, {
      hour: 'numeric',
      minute: '2-digit',
      timeZone,
    });
    return `${dayPart} · ${timeFmt.format(start)} – ${timeFmt.format(end)}`;
  }
  return `${fmt.format(start)} – ${fmt.format(end)}`;
}
