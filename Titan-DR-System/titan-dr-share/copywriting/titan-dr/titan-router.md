---
name: titan-router
description: >
  Universal content type router for the Titan DR system. Maps ANY content type to:
  which Titan files to load, which pipeline to run, which hooks/structures apply,
  and which cross-format techniques to deploy. Consult this file FIRST for any
  production or copy task.
---

# Titan Content Router — v1.0

> **Design Principle:** Psychology is universal. Format constraints are filters, not barriers.
> Every content type gets access to the full Titan arsenal (biases, hooks, NLP, storytelling),
> then applies format-specific structural DNA on top.

---

## UNIVERSAL FILES — Load for ALL Content Types (No Exceptions)

| # | File | What It Provides |
|---|------|-----------------|
| 1 | `core/titan-psychology.md` | 28 biases, Schwartz awareness (5 levels), sophistication stages, neurochemical sequence, Triune Brain, Bencivenga |
| 2 | `core/titan-language.md` | Headline formula (I=B+C), 13 strengtheners, 25 NLP patterns, 10 copy killers, quality gate, voice registers |
| 3 | `references/titan-words-forbidden.md` | Compliance: Tier 1/2, 6 Shield Protocols, Personal Attributes trap, Meta 2025+ |
| 4 | `references/titan-deployment-checklist.md` | Quality gate: verify Titan techniques were provably deployed |

---

## UNIVERSAL TECHNIQUES — Available to ALL Formats

These techniques originated in specific files but apply everywhere. Use them regardless of content type:

| Technique | Source File | Use In Any Format When... |
|-----------|-----------|--------------------------|
| Open Loops (Zeigarnik) | titan-psychology.md | Copy is longer than 2 sentences |
| Fractionation (DOWN/UP) | titan-psychology.md | Copy has a problem → solution arc |
| 28 Cognitive Biases | titan-psychology.md | Always (minimum 5 per deliverable) |
| NLP Patterns (25) | titan-language.md | Any body copy exists |
| Future Pacing | titan-storytelling.md | Copy describes outcomes |
| Mechanism Naming | titan-facebook-ads.md / titan-vsl.md | Introducing a product or problem |
| Rock Bottom Formula | titan-storytelling.md | Any copy with a story/testimonial |
| Concentration | titan-psychology.md | Any copy comparing to alternatives |
| Neurochemical Sequence | titan-psychology.md | Any copy with emotional arc |
| Story Arcs (7) | titan-storytelling.md | Any long-form copy (VSL, advertorial, email, listicle reasons) |

---

## VIDEO PIPELINE — Content Types

Pipeline: `.claude/commands/vsl-production.md` (15 phases)

### VSL Standard (3-6 min)
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-vsl.md` |
| Story | `core/titan-storytelling.md` |
| Hooks | `references/titan-hook-library.md` + `references/titan-video-hooks.md` |
| Structures | 7 options: Frankenstein, Bible Narrative, Facebook V1, Gundry BioSync, Elite Secret, Fast Expose, Rapid Pitch |
| Phases | All 15 |

### VSL Story / Roosevelt (3 min, with 60s + 45s cuts)
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-story-vsl.md` |
| Story | `core/titan-storytelling.md` |
| Hooks | `references/titan-hook-library.md` + `references/titan-video-hooks.md` |
| Structure | 5-bone: Historical Hook → Proof → Pivot → Thing Removed → Restoration |
| Output | Dual-hook (Hook A story + Hook B direct) + 3 length cuts |
| Phases | All 15 |

### Short Ad (15-60s)
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-facebook-ads.md` (video ad structures: 15s/30s/60s/90s) |
| Hooks | `references/titan-hook-library.md` + `references/titan-video-hooks.md` |
| Phases | 13 (skip Research, Image Revisions) |

### UGC Clip (15-30s)
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-facebook-ads.md` |
| Hooks | `references/titan-hook-library.md` + `references/titan-video-hooks.md` |
| UGC Bodies | `references/titan-video-hooks.md` (UGC body structures, influencer archetypes) |
| Phases | 10 (skip Research, Master Script, Camera Plan, Voiceover, Image Revisions) |

---

## COPY PIPELINE — Content Types

Pipeline: `.claude/commands/copy-production.md` (6 phases)

### Facebook Ad Copy
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-facebook-ads.md` |
| Hooks | `references/titan-hook-library.md` (21 types — match to audience temperature) |
| Cross-Format | UMP/UMS from `titan-vsl.md` for mechanism naming |
| Output | 5 copy variations + image briefs + hooks file |

### Landing Page
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-landing-page.md` (6 conversion blocks, message match, offer stacking) |
| Cross-Format | `formats/titan-vsl.md` — UMP/UMS for problem/solution blocks, Crossroads Close for final CTA |
| Cross-Format | `core/titan-storytelling.md` — Rock Bottom formula for testimonial/trust sections |
| Output | Copy blocks + optional Tailwind HTML |

### Listicle
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-listicle.md` (conversion arc, 10-reason distribution) |
| Cross-Format | `core/titan-storytelling.md` — mini-stories inside reasons |
| Cross-Format | `formats/titan-vsl.md` — open loops between reasons, concentration moves |
| Output | Article + meta |

### Advertorial
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-advertorial.md` (camouflage, editorial blueprint) |
| Story | `core/titan-storytelling.md` (required — advertorials are narrative-driven) |
| Cross-Format | `formats/titan-vsl.md` — UMP/UMS as editorial discovery structure |
| Output | Editorial article + headline variants |

### Email Sequence
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-email.md` (5 formats, post-purchase, abandoned cart) |
| Cross-Format | `core/titan-storytelling.md` — for story-format emails |
| Cross-Format | `references/titan-hook-library.md` — hook types work as subject line openers |
| Output | Multi-email + subject line variants |

### Quiz Funnel
| Component | File(s) |
|-----------|---------|
| Format | `formats/titan-quiz-funnel.md` (question architecture, scoring, result page) |
| Cross-Format | `formats/titan-landing-page.md` — offer stacking for result page CTA |
| Output | Questions JSON + results copy |

---

## COPY AUDIT PIPELINE — Optimization Mode

Pipeline: `.claude/commands/copy-audit.md` (6 phases)

For optimizing EXISTING copy (landing pages, ads, headlines, bullet points):

| Input Type | Titan Files | What to Check |
|-----------|------------|---------------|
| Existing landing page | All 3 core + `titan-landing-page.md` + deployment checklist | 6-block structure, message match, bias deployment, compliance |
| Existing ad copy | All 3 core + `titan-facebook-ads.md` + `titan-hook-library.md` | Hook strength, scroll-stopper anatomy, conversion block alignment |
| Existing headlines | `titan-language.md` + `titan-words-approved.md` | I=B+C formula, strengtheners, entry device, awareness routing |
| Existing email | All 3 core + `titan-email.md` | Subject line formula, email format adherence, CTA optimization |
| Existing VSL script | All 3 core + `titan-vsl.md` + `titan-storytelling.md` | Structure adherence, UMP/UMS, hook formula, neurochemical arc |

---

## PER-PHASE TITAN LOADING (Video Pipeline)

For `.claude/commands/vsl-production.md` — which Titan files each phase needs:

| Phase | Titan Files | Purpose |
|-------|-----------|---------|
| 1 (Intake) | `core/titan-psychology.md` §Schwartz | Classify awareness level + sophistication stage |
| 2 (Research) | `core/titan-psychology.md` + `core/titan-storytelling.md` | Build personas, select story arc |
| 3 (Script) | ALL core + format file + hook files + `titan-words-approved.md` | Write copy using full Titan arsenal |
| 3 (Compliance) | `references/titan-words-forbidden.md` | Tier 1/2 check + Shield verification |
| 3 (Deployment) | `references/titan-deployment-checklist.md` + core files | Verify techniques provably used |
| 4 (Master Script) | `core/titan-psychology.md` §Neurochemical | Annotate scenes with neurochemical targets |
| 6 (Scene Breakdown) | `references/titan-words-forbidden.md` | Compliance on narration text |
| 7 (Voiceover) | `core/titan-language.md` §Voice Register | Match voice register to ElevenLabs params |
| 12 (Sound Design) | `core/titan-psychology.md` §Neurochemical | Map SFX to emotional arc |
| 15 (Final Gate) | `references/titan-deployment-checklist.md` + `references/titan-words-forbidden.md` | Final compliance + deployment verification |

---

## HOOK ROUTING

Hooks are a first-class concept. For ANY content that needs a hook:

1. **Always load:** `references/titan-hook-library.md` (21 types from 6,812 ads)
2. **For video:** Also load `references/titan-video-hooks.md` (hook alignment, re-hooks, story locks)
3. **Match hook to audience temperature:**

| Audience Temperature | Recommended Hook Types |
|---------------------|----------------------|
| Cold (Level 4-5 unaware) | Story, Identity Challenge, Curiosity Gap, Culture-Hijack |
| Warm (Level 2-3 aware) | Benefit Stack, Authority Discovery, Social Proof, Before/After |
| Hot (Level 1 most aware) | Promotional, Testimonial, Transformation Timeline |

4. **Hook types available** (from titan-hook-library.md):
   Benefit Stack, Facts/Stats, Promotional, Testimonial, Before/After, Social Proof Scale, Authority Discovery, FAQ/Explainer, Humor/Fun, Transformation Timeline, Personal Story, Identity Challenge, Curiosity Gap, Hidden Enemy, Mechanism Reveal, Shame→Discovery, Culture-Hijack, Worsening Fear, Platform Authority, Contrarian, Interactive

---

## FILE INVENTORY (Complete)

### Core (3 files — always load)
- `core/titan-psychology.md` (562 lines)
- `core/titan-language.md` (615 lines)
- `core/titan-storytelling.md` (382 lines)

### Formats (8 files — load per task)
- `formats/titan-vsl.md` (773 lines)
- `formats/titan-story-vsl.md` (354 lines)
- `formats/titan-facebook-ads.md` (443 lines)
- `formats/titan-listicle.md` (264 lines)
- `formats/titan-advertorial.md` (189 lines)
- `formats/titan-landing-page.md` (299 lines)
- `formats/titan-email.md` (292 lines)
- `formats/titan-quiz-funnel.md` (246 lines)

### References (8 active files)
- `references/titan-words-forbidden.md` (~200 lines)
- `references/titan-deployment-checklist.md` (~180 lines)
- `references/titan-hook-library.md` (645 lines)
- `references/titan-video-hooks.md` (399 lines)
- `references/titan-words-approved.md` (~150 lines)
- `references/titan-swipe-file.md` (142 lines)
- `references/titan-expert-panel.md` (~200 lines) — RETIRED as quality gate, retained as reference
- `references/survivex-products.md` — Brand-specific (SurviveX only)

### Legacy (8 files — superseded by v2.0)
- `references/dr-copy-strategy.md` → `core/titan-psychology.md`
- `references/dr-copy-formats.md` → `formats/titan-*.md`
- `references/dr-copy-language.md` → `core/titan-language.md`
- `references/dr-copy-voice.md` → Integrated into `core/titan-language.md`
- `references/dr-copy-examples.md` → Examples inside each format file
- `references/dr-copy-examples-ext.md` → Examples inside each format file
- `references/dr-compliance.md` → `references/titan-words-forbidden.md`
- `references/dr-visual.md` → Summarized in `titan-facebook-ads.md`
