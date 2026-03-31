# The Titan Direct Response System — Setup Guide

## What This Is

A complete copywriting system for DTC first aid and emergency preparedness brands. Covers Facebook/Meta ads, VSLs, advertorials, landing pages, listicles, quiz funnels, email sequences, and compliance — all built from analysis of 8-figure brands (MyMedic, NAR, Uncharted Supply) and 5,104 winning DTC ads.

**28 files. ~9,000 lines. One system.**

---

## How To Use It (Claude / Any LLM)

### Option 1: Claude Projects (Recommended)

1. Go to claude.ai → Create a new Project
2. Upload all files from the `titan-dr/` folder into the Project Knowledge
3. Set the Project Instructions to:

```
You are a direct response copywriter operating under the Titan DR system. Read SKILL.md first — it is the router that tells you which files to load for each task.

CRITICAL RULES:
- Always load the 3 core files (titan-psychology.md, titan-language.md, titan-words-forbidden.md) for EVERY copy task
- Then load the format-specific file based on the task (see routing table in SKILL.md)
- Follow the 7-step execution workflow in SKILL.md exactly
- Never skip the compliance check (Step 6)
- Write to the motivated 5%. Ignore the rest.
```

4. Start chatting. Example prompts:
   - "Write 5 Facebook ads for the SurviveX Large First Aid Kit targeting men 28-45 who want to protect their families"
   - "Write a 10-minute VSL script for the SurviveX Large Pro Kit"
   - "Write an advertorial for the SurviveX Waterproof Kit in the style of an outdoor survival magazine article"
   - "Audit this copy for compliance issues: [paste copy]"

### Option 2: Single-Conversation (Any LLM)

If your LLM doesn't support projects, paste files into the conversation:

1. **Always start with:** SKILL.md (the router — tells the LLM what to load)
2. **Then paste the 3 core files:**
   - `core/titan-psychology.md` — buyer psychology, biases, awareness levels
   - `core/titan-language.md` — headlines, NLP, quality gate
   - `references/titan-words-forbidden.md` — compliance (NEVER skip this)
3. **Then paste the format file for your task:**
   - Facebook/Meta ads → `formats/titan-facebook-ads.md`
   - VSL scripts → `formats/titan-vsl.md`
   - Story-style videos → `formats/titan-story-vsl.md`
   - Advertorials → `formats/titan-advertorial.md`
   - Landing pages → `formats/titan-landing-page.md`
   - Listicles → `formats/titan-listicle.md`
   - Quiz funnels → `formats/titan-quiz-funnel.md`
   - Email sequences → `formats/titan-email.md`

**Context window tip:** Most LLMs can handle 3-5 files at once. Don't paste all 28 — use the routing table in SKILL.md to pick the right ones.

### Option 3: Claude Code / Cursor / Windsurf

1. Place the `titan-dr/` folder somewhere accessible (e.g., `~/.skills/titan-dr/`)
2. Reference it in your CLAUDE.md or system instructions:
```
When writing DTC copy for SurviveX or first aid/emergency preparedness brands, load the Titan DR skill from ~/.skills/titan-dr/SKILL.md and follow its routing system.
```
3. The LLM will read SKILL.md, then load the right files per task.

---

## File Map — What's Inside

### SKILL.md (Start Here)
The router. Tells you which files to load for each task. Contains the execution workflow and 7 critical rules.

### Core (Load Every Time)
| File | What It Does |
|------|-------------|
| `core/titan-psychology.md` | 28 cognitive biases, Schwartz Market Awareness (5 levels), Market Sophistication (5 stages), neurochemical sequencing (cortisol→dopamine→oxytocin), Triune Brain model, 7 evolutionary drivers |
| `core/titan-language.md` | Master Headline Formula (4-slot), 13 Schwartz Strengtheners, 25 NLP patterns, 10 Conversion Killers, Quality Gate (10-lens scoring system) |
| `core/titan-storytelling.md` | 7 story arcs, 4 character blueprints, emotion sequencing, open loops, future pacing |

### Formats (Load Per Task)
| File | Format |
|------|--------|
| `formats/titan-facebook-ads.md` | Facebook/Meta/Instagram ads — Andromeda algorithm, scroll-stoppers, 15 conversion blocks, 6 executed examples |
| `formats/titan-vsl.md` | Video Sales Letters — UMP/UMS engine, 9-section Frankenstein structure, Crossroads close, Peter Kell's 9 moves |
| `formats/titan-story-vsl.md` | Native story videos — historical hooks, "did you know" format, Roosevelt-style narratives |
| `formats/titan-advertorial.md` | Advertorials — camouflage principle, 3 mood-borrowing methods, editorial structure |
| `formats/titan-landing-page.md` | Landing/sales pages — 6 conversion blocks, offer architecture, pricing psychology, CTA engineering |
| `formats/titan-listicle.md` | Listicles/pre-sale — reason blocks, comparison tables, conversion arcs |
| `formats/titan-quiz-funnel.md` | Quiz funnels — 5-step question architecture, scoring system, result page formula |
| `formats/titan-email.md` | Email sequences — 5 formats, post-purchase sequence, abandoned cart, subject lines |

### References (Load As Needed)
| File | What It Does |
|------|-------------|
| `references/titan-words-forbidden.md` | **COMPLIANCE — ALWAYS LOAD.** Tier 1/2 system, 6 Shield Protocols, Titan Thesaurus (17 evidence-based word swaps), Meta 2025+ CAPI workarounds, War Room audit framework |
| `references/titan-words-approved.md` | Power words by emotional category (curiosity, urgency, authority, fear, hope, identity, sensory) |
| `references/titan-hook-library.md` | 20 hook types from 5,104 winning ads with longevity rankings and formulas |
| `references/titan-video-hooks.md` | Video execution layer — Hook A expansion, re-hooks, Story Locks, UGC structures, thumbnail framework |
| `references/titan-expert-panel.md` | 10-expert quality panel (Ogilvy, Schwartz, Halbert, Hopkins, etc.) |
| `references/titan-swipe-file.md` | Headline and copy swipe file |
| `references/survivex-products.md` | SurviveX brand knowledge (first aid kit specs, offers) — only relevant if writing for SurviveX |
| `references/survivex-multi-page-strategy.md` | SurviveX funnel strategy — only relevant if writing for SurviveX |

### Legacy Files (Still Valid)
The `references/dr-*.md` files are the original v1 system. Everything in them has been reorganized into the v2 files above, but they're still valid references if you want the raw research.

---

## The 7 Critical Rules (Memorize These)

1. **Every sentence does at least two jobs.** Informs + persuades. Agitates + opens loop. Proves + builds desire.
2. **Benefits lead. Features justify.** Never reverse.
3. **"You" not "We."** The copy is about them.
4. **Short sentences. Fragments for emphasis. Like this.**
5. **Specific over general.** "$1.63/day" not "affordable." "31,482 people" not "thousands."
6. **Voice must match avatar exactly.** If it could be for anyone, it's for no one.
7. **Compliance always.** No Tier 1 trigger is ever worth the risk.

---

## Quick Start Examples

**"Write me 5 Facebook ads for the SurviveX Large First Aid Kit targeting men 28-45 who want to protect their families"**
→ LLM loads: SKILL.md + titan-psychology.md + titan-language.md + titan-words-forbidden.md + titan-facebook-ads.md

**"Write a 12-minute VSL for the SurviveX Large Pro Kit featuring Chase Carter, EMT-P"**
→ LLM loads: SKILL.md + titan-psychology.md + titan-language.md + titan-words-forbidden.md + titan-vsl.md + titan-storytelling.md

**"Audit this landing page copy for compliance"**
→ LLM loads: SKILL.md + titan-words-forbidden.md + titan-landing-page.md

**"Write 20 scroll-stopping hooks for the SurviveX first aid kits"**
→ LLM loads: SKILL.md + titan-language.md + titan-words-forbidden.md + titan-hook-library.md

---

## Important Notes

- The system is built for **SurviveX and DTC first aid / emergency preparedness brands**. It works for other DTC verticals but the compliance section is safety/preparedness-specific.
- **titan-words-forbidden.md is non-negotiable.** Every copy task must run through compliance. One Tier 1 violation can kill an ad account.
- The Titan Thesaurus (inside titan-words-forbidden.md) gives you the exact language 8-figure brands use on live pages. Use Column 3 (Titan Swap), not Column 2 (White Hat) — White Hat is the safe but weak fallback.
- Legacy files (`dr-*.md`) overlap with v2 files. You don't need both — v2 is more organized and complete.
