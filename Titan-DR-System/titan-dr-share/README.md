# Titan DR System

A comprehensive AI-powered Direct Response copywriting, design, and video production system built for Claude (Anthropic). Configured for SurviveX — premium first aid kit and trauma care brand targeting "The Protector" avatar (men 28-45, family providers) in the emergency preparedness market.

## Structure

### copywriting/titan-dr/
The core Titan DR copywriting engine:
- **SKILL.md** — Main skill definition and routing logic
- **core/** — Psychology (50+ cognitive biases), language engine, storytelling frameworks
- **formats/** — Format-specific instructions: VSL, Story-VSL, Email, Facebook Ads, Advertorial, Listicle, Landing Page, Quiz Funnel
- **references/** — Hook library (21 types), compliance (FDA/FTC/Meta), swipe file, expert panel, approved/forbidden words, visual specs, copy strategy & examples, SurviveX product specs
- **titan-router.md/.json** — Automatic format/skill routing

### copywriting/titan-verify/
QA system with 10-expert panel scoring (90+ gate), humanizer pass, and verification report template.

### copywriting/titan-video-analyzer/
Video ad deconstruction tool — analyzes hooks, biases, structure, compliance, and neurochemical arc from competitor ads.

### design/titan-conversion-designer/
Conversion-optimized design system — visual patterns, copy-on-image rules, design psychology, HTML templates.

### design/titan-ads/
Ad creative design — 13-brand research-backed creative patterns, production pipeline, copy-on-image rules.

### production/
Full production orchestrators:
- **vsl-production.md** — 15-phase automated pipeline (intake → research → script → images → video → post-production)
- **copy-production.md** — Copy production workflow
- **copy-audit.md** — Copy audit/review workflow
- **titan-verify.md** — Standalone verification command

## How to Use

These files are designed as Claude Code skills. Place them in your `~/.memory/skills/` directory (or equivalent) and reference them in your skill index. The system works with Claude's tool-use capabilities for research, writing, and verification workflows.
