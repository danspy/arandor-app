export const prerender = false;

export async function GET({ request }: { request: Request }) {
  const url = new URL(request.url);
  const characterId = url.searchParams.get('characterId');

  if (!characterId) {
    return new Response(JSON.stringify({ error: 'Missing characterId parameter' }), {
      status: 400,
      headers: {
        'Content-Type': 'application/json',
      },
    });
  }

  try {
    const dndbeyondUrl = `https://character-service.dndbeyond.com/character/v5/character/${characterId}`;
    const response = await fetch(dndbeyondUrl);
    
    if (!response.ok) {
      throw new Error(`Failed to fetch character data: ${response.statusText}`);
    }

    const data = await response.json();

    return new Response(JSON.stringify(data), {
      status: 200,
      headers: {
        'Content-Type': 'application/json',
      },
    });
  } catch (error) {
    console.error('Error fetching character data:', error);
    return new Response(JSON.stringify({ error: 'Failed to fetch character data' }), {
      status: 500,
      headers: {
        'Content-Type': 'application/json',
      },
    });
  }
}
