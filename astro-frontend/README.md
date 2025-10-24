# Arandor Companion App - Astro Frontend

This is the Astro.js frontend for the Arandor D&D companion app.

## Stack

- **Framework**: Astro.js 5.x
- **Styling**: Tailwind CSS 3.x
- **Interactivity**: Alpine.js 3.x
- **Runtime**: Node.js (for server-side rendering)

## Development

Install dependencies:

```bash
npm install
```

Start the development server:

```bash
npm run dev
```

The app will be available at `http://localhost:4321`

## Building

Build the application:

```bash
npm run build
```

Preview the production build:

```bash
npm run preview
```

## Features

- **Server-Side Rendering**: Dynamic content with Astro's server mode
- **API Endpoints**: `/api/character` for D&D Beyond character data proxy
- **Content Collections**: Structured content management for home, characters, diary, and NPCs
- **Alpine.js Integration**: Interactive UI components
- **Tailwind CSS**: Utility-first styling with custom configuration
- **Progressive Enhancement**: Works with and without JavaScript

## Project Structure

```
astro-frontend/
├── src/
│   ├── components/      # Reusable Astro components
│   ├── content/         # Content collections (JSON/YAML/MD)
│   ├── layouts/         # Page layouts
│   ├── pages/           # Routes and pages
│   │   ├── api/        # API endpoints
│   │   └── *.astro     # Page routes
│   └── styles/          # Global CSS
├── public/              # Static assets
├── astro.config.mjs     # Astro configuration
├── tailwind.config.mjs  # Tailwind configuration
└── tsconfig.json        # TypeScript configuration
```

## Migration Notes

This Astro frontend replaces the previous Kirby CMS + Vite setup while maintaining:
- All existing functionality
- Visual design and styling
- D&D Beyond integration
- Alpine.js interactivity
- Tailwind CSS configuration

## Next Steps

- [ ] Migrate all character data to content collections
- [ ] Implement diary entry pages
- [ ] Add NPC pages
- [ ] Configure PWA support
- [ ] Set up deployment
