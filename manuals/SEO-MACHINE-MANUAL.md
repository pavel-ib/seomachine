# SurviveX SEO Machine — Complete Workspace Manual

> **Version**: 1.0 | **Date**: 2026-03-24
> **Forked from**: [github.com/TheCraigHewitt/seomachine](https://github.com/TheCraigHewitt/seomachine)
> **Customized for**: SurviveX (survivex.com) — Professional-grade first aid kits & emergency preparedness

---

## Table of Contents

1. [What Is SEO Machine?](#1-what-is-seo-machine)
2. [Setup & Configuration](#2-setup--configuration)
3. [Architecture Overview](#3-architecture-overview)
4. [Content Pipeline](#4-content-pipeline)
5. [Commands Reference](#5-commands-reference)
   - [Content Creation](#51-content-creation-commands)
   - [Landing Pages](#52-landing-page-commands)
   - [Optimization](#53-optimization-commands)
   - [Research & Analysis](#54-research--analysis-commands)
   - [Publishing](#55-publishing-commands)
   - [Planning & Prioritization](#56-planning--prioritization-commands)
6. [Agents Reference](#6-agents-reference)
7. [Python Analysis Pipeline](#7-python-analysis-pipeline)
8. [Context Files (Brand & SEO Framework)](#8-context-files)
9. [WordPress Integration](#9-wordpress-integration)
10. [Directory Structure](#10-directory-structure)
11. [Workflows & Recipes](#11-workflows--recipes)
12. [Troubleshooting](#12-troubleshooting)

---

## 1. What Is SEO Machine?

SEO Machine is a **Claude Code workspace** that turns Claude into a full SEO content operations platform. It combines:

- **23 slash commands** for content research, writing, optimization, and publishing
- **11 specialized AI agents** that handle specific tasks (SEO analysis, meta creation, internal linking, etc.)
- **24 Python modules** for data-driven analysis (GA4, GSC, DataForSEO, readability scoring, etc.)
- **11 standalone research scripts** for keyword research, competitor gaps, and performance analysis
- **WordPress publishing** with Yoast SEO metadata support

This workspace has been customized for **SurviveX**, with detailed brand voice, product features, keyword clusters, competitor analysis, and internal linking maps pre-loaded in the `context/` directory.

### What You Can Do

| Category | Capability |
|----------|-----------|
| **Research** | Keyword research, SERP analysis, competitor gaps, trending topics, performance reviews |
| **Write** | Blog articles, pillar content, topic clusters, landing pages (SEO & PPC) |
| **Optimize** | SEO scoring, meta tag generation, internal linking, keyword mapping, content scrubbing |
| **Analyze** | Content health audits, readability scoring, CRO analysis, performance matrices |
| **Publish** | Direct WordPress publishing with Yoast SEO fields, draft management |
| **Plan** | Content calendars, prioritization matrices, topic cluster strategies |

---

## 2. Setup & Configuration

### Prerequisites

- **Claude Code** (claude.ai/code) installed and configured
- **Python 3.8+** installed
- API credentials for data integrations (optional — commands work without them, but analytics-driven features require them)

### Install Python Dependencies

```bash
cd seomachine
pip install -r data_sources/requirements.txt
```

### API Configuration

Create `data_sources/config/.env` with your credentials:

```env
# Google Analytics 4
GA4_PROPERTY_ID=your_ga4_property_id

# Google Search Console
GSC_SITE_URL=https://yoursite.com

# DataForSEO
DATAFORSEO_LOGIN=your_login
DATAFORSEO_PASSWORD=your_password

# WordPress
WORDPRESS_URL=https://yoursite.com
WORDPRESS_USERNAME=your_username
WORDPRESS_APP_PASSWORD=your_app_password
```

Place your GA4 service account JSON in `credentials/ga4-credentials.json`.

### WordPress Plugin Setup

Upload `wordpress/seo-machine-yoast-rest.php` to your WordPress site's `wp-content/mu-plugins/` directory. This exposes Yoast SEO fields via the REST API.

### Verify Setup

```bash
# Test DataForSEO connectivity
python3 test_dataforseo.py

# Test full analysis pipeline
python3 research_quick_wins.py
```

---

## 3. Architecture Overview

### Command-Agent Model

```
User types /command
       │
       ▼
┌─────────────────┐
│   Command File   │  (.claude/commands/*.md)
│  Orchestrates    │  Defines workflow steps, parameters, output format
│  the workflow    │
└────────┬────────┘
         │ invokes
         ▼
┌─────────────────┐
│   Agent(s)       │  (.claude/agents/*.md)
│  Specialized     │  Each agent has a specific role and expertise
│  execution       │
└────────┬────────┘
         │ uses
         ▼
┌─────────────────┐
│  Python Modules  │  (data_sources/modules/*.py)
│  Data analysis   │  API integrations, scoring, scrubbing
│  & integrations  │
└────────┬────────┘
         │ reads
         ▼
┌─────────────────┐
│  Context Files   │  (context/*.md)
│  Brand voice,    │  Pre-loaded SurviveX brand framework
│  SEO rules       │
└─────────────────┘
```

**Commands** define *what* to do. **Agents** define *how* to do it. **Python modules** provide *data*. **Context files** provide *brand rules*.

### Data Flow

```
External APIs (GA4, GSC, DataForSEO)
       │
       ▼
Python Analysis Pipeline (24 modules)
       │
       ▼
Commands orchestrate research + writing
       │
       ▼
Agents optimize and polish content
       │
       ▼
WordPress Publishing (REST API + Yoast)
```

---

## 4. Content Pipeline

Content flows through these directories:

```
topics/              Ideas and topic brainstorming
   ↓
research/            Keyword briefs, SERP analysis, competitor gaps
   ↓
drafts/              Written articles with analysis reports
   ↓
review-required/     Articles that failed quality score (<70), need human review
   ↓
published/           Final approved articles

rewrites/            Updated versions of existing content
landing-pages/       Conversion-optimized landing pages
audits/              Content and CRO audit reports
```

Every article produced by `/write` automatically triggers 5 optimization agents that generate companion report files alongside the draft.

---

## 5. Commands Reference

All commands are invoked as slash commands in Claude Code. Type `/command-name` followed by any required parameters.

### 5.1 Content Creation Commands

#### `/write [topic]`

**Purpose**: Create a full SEO-optimized blog article (2,000–3,000+ words).

**Usage**:
```
/write first aid kit for hiking
```

**What happens**:
1. Researches the topic using context files and available data
2. Writes the article with hooks, mini-stories, and 2-3 CTAs
3. Auto-runs `/scrub` to clean AI artifacts
4. Auto-invokes 5 agents in sequence:
   - `content-analyzer` → content analysis report
   - `seo-optimizer` → SEO optimization report
   - `meta-creator` → 5 meta title/description variations
   - `internal-linker` → 3-5 internal link suggestions
   - `keyword-mapper` → keyword placement analysis

**Output files** (all in `drafts/`):
- `[topic-slug]-[YYYY-MM-DD].md` — The article
- `content-analysis-[topic-slug]-[YYYY-MM-DD].md` — Content analysis
- `seo-report-[topic-slug]-[YYYY-MM-DD].md` — SEO report
- `meta-options-[topic-slug]-[YYYY-MM-DD].md` — Meta tag variations
- `link-suggestions-[topic-slug]-[YYYY-MM-DD].md` — Internal link plan
- `keyword-analysis-[topic-slug]-[YYYY-MM-DD].md` — Keyword mapping

**Quality gate**: If the editor agent scores the article below 70, it goes to `review-required/` instead.

---

#### `/rewrite [topic]`

**Purpose**: Update existing content with fresh research, fix outdated information, improve SEO performance.

**Usage**:
```
/rewrite first aid kit for hiking
```

**What happens**:
1. Locates the existing article in `drafts/` or `published/`
2. Classifies the rewrite scope:
   - **Light** (20-30% changes) — Quick refresh
   - **Moderate** (40-60%) — Significant updates
   - **Major** (70-90%) — Near-complete overhaul
   - **Complete** (90%+) — Full rewrite
3. Rewrites with new research and current data
4. Auto-runs `/scrub` + all 5 optimization agents

**Output**: `rewrites/[topic-slug]-rewrite-[YYYY-MM-DD].md` + companion reports

---

#### `/article [topic]`

**Purpose**: Unified research-to-article pipeline. More research-intensive than `/write`.

**Usage**:
```
/article best burn treatment for kids
```

**What happens**:
1. Runs SERP analysis (top 5 competitors analyzed)
2. Researches social sources (5 Reddit threads + 5 YouTube videos)
3. Plans article sections based on gaps found
4. Writes section-by-section
5. Auto-invokes all optimization agents

**Output**: Research files + single article in `drafts/`

---

#### `/cluster [topic]`

**Purpose**: Build a complete topic cluster — one pillar page + 8-12 supporting articles + internal linking map.

**Usage**:
```
/cluster first aid kits
```

**What happens**:
1. Deep keyword research for the cluster topic
2. SERP analysis for each target keyword
3. Designs cluster architecture (pillar + spokes)
4. Creates pillar page (3,000-5,000 words) via `/write`
5. Creates 8-12 support articles (1,500-3,000 words each) via `/write`
6. Generates internal linking map connecting all pieces
7. Prioritizes articles by opportunity score

**Output**:
- `research/cluster-strategy-[topic-slug]-[YYYY-MM-DD].md` — Cluster strategy
- Pillar article + support articles in `drafts/`
- Each article gets full optimization agent treatment

**Support article scoring** (how articles are prioritized):
- Search volume: 30%
- Difficulty (inverse): 20%
- Search intent match: 20%
- Pillar dependency: 15%
- Cross-link value: 15%

---

### 5.2 Landing Page Commands

#### `/landing-write [topic]`

**Purpose**: Create a conversion-optimized landing page.

**Usage**:
```
/landing-write large first aid kit --type seo --goal trial
```

**Parameters**:
- `topic` (required) — The page topic
- `--type seo|ppc` — SEO pages: 1,500-2,500 words, 3-5 CTAs, 2+ testimonials. PPC pages: 400-800 words, 2-3 CTAs, minimal distractions
- `--goal trial|demo|lead` — Conversion goal

**Agents invoked**: `headline-generator` (10+ variations), `cro-analyst` (psychology analysis), `landing-page-optimizer` (scoring)

**Output**: `landing-pages/[topic-slug]-[YYYY-MM-DD].md`

---

#### `/landing-research [topic]`

**Purpose**: Research competitors, keywords, and gaps before writing a landing page.

**Usage**:
```
/landing-research travel first aid kit --type seo
```

**Output**: `research/landing-brief-[topic-slug]-[YYYY-MM-DD].md`

---

#### `/landing-audit [URL or file]`

**Purpose**: Comprehensive CRO analysis across 5 dimensions. **Score must be ≥75 before a page can be published.**

**Usage**:
```
/landing-audit landing-pages/large-first-aid-kit-2026-03-19.html --goal trial
```

**5 Audit Dimensions**:
1. **Above-the-Fold** — Headline, value prop, CTA visibility, trust signal
2. **CTA Effectiveness** — Placement, text, distribution
3. **Trust Signals** — Testimonials, social proof, risk reversal, authority
4. **Friction Points** — Cognitive load, missing info, competing CTAs
5. **Structure Assessment** — Length, sections, CTA count

**Output**: `audits/landing-audit-[slug]-[YYYY-MM-DD].md` with 0-100 score

---

#### `/landing-competitor [URL]`

**Purpose**: Analyze a specific competitor's landing page.

**Usage**:
```
/landing-competitor https://mymedic.com/products/myfak-first-aid-kit
```

**Extracts**: Above-fold elements, CTAs, trust signals, objection handling, page structure.

**Output**: `research/competitor-landing-[domain]-[YYYY-MM-DD].md`

---

#### `/landing-publish [file]`

**Purpose**: Publish a landing page to WordPress as a page (draft status).

**Usage**:
```
/landing-publish landing-pages/large-first-aid-kit-2026-03-19.html --noindex
```

**Requirements**: Landing audit score ≥75. Supports `--noindex` flag and `--template` selection.

---

### 5.3 Optimization Commands

#### `/optimize [file]`

**Purpose**: Final SEO polish pass on any article. Provides a 0-100 SEO score and prioritized fixes.

**Usage**:
```
/optimize drafts/first-aid-kit-hiking-2026-03-24.md
```

**Agents invoked**: `seo-optimizer`, `meta-creator`, `internal-linker`, `keyword-mapper`

**Output**: `drafts/optimization-report-[topic-slug]-[YYYY-MM-DD].md`

**Checks**: Keyword audit, heading structure, internal/external links, meta tags, readability, image optimization, featured snippet opportunities.

---

#### `/analyze-existing [URL or file]`

**Purpose**: Deep content health audit using the 5-module Python analysis pipeline.

**Usage**:
```
/analyze-existing https://survivex.com/blogs/first-aid-kit-guide
```

**5 Analysis Modules**:
1. `search_intent_analyzer.py` — Query intent classification
2. `keyword_analyzer.py` — Density, distribution, stuffing detection
3. `content_length_comparator.py` — Benchmark vs. top 10 SERP results
4. `readability_scorer.py` — Flesch Reading Ease, grade level
5. `seo_quality_rater.py` — Comprehensive 0-100 SEO score

**Output**: `research/analysis-[post-slug]-[YYYY-MM-DD].md`

---

#### `/scrub [file]`

**Purpose**: Remove AI artifacts from content — zero-width spaces, BOMs, em-dashes, AI watermark patterns.

**Usage**:
```
/scrub drafts/first-aid-kit-hiking-2026-03-24.md
```

**Note**: Automatically invoked by `/write` and `/rewrite`. Modifies the file in-place and displays statistics.

---

### 5.4 Research & Analysis Commands

#### `/research [topic]`

**Purpose**: Keyword research, competitive analysis, and content gap identification. Generates a research brief.

**Usage**:
```
/research israeli bandage uses
```

**Output**: `research/brief-[topic-slug]-[YYYY-MM-DD].md`

---

#### `/research-serp "keyword"`

**Purpose**: Deep SERP analysis for a specific keyword.

**Usage**:
```
/research-serp "best first aid kit for hiking"
```

**Analyzes**: Content type patterns, word count benchmarks, SERP features (featured snippets, PAA), freshness requirements, competitive difficulty, top 10 competitor content.

**Output**: `research/serp-analysis-[keyword].md`

---

#### `/research-gaps`

**Purpose**: Find keywords your top 20 competitors rank for that you don't.

**Usage**:
```
/research-gaps
```

**Requires**: GSC API + DataForSEO API configured. Scores opportunities by volume, difficulty, and intent.

**Output**: `research/competitor-gaps-[YYYY-MM-DD].md`

---

#### `/research-trending`

**Purpose**: Find topics gaining search interest right now.

**Usage**:
```
/research-trending
```

**Compares** 7-day vs. 30-day trends. Calculates urgency levels:
- **Critical**: +150% growth
- **High**: +75% growth
- **Moderate**: +30% growth

**Output**: `research/trending-[YYYY-MM-DD].md`

---

#### `/research-performance`

**Purpose**: Categorize existing content into 4 performance quadrants.

**Usage**:
```
/research-performance
```

**Quadrants**:
- **Stars** — High traffic + good rankings (protect and expand)
- **Overperformers** — Rankings better than expected (double down)
- **Underperformers** — High impressions, low clicks (fix CTR)
- **Declining** — Losing positions (urgent rewrite)

**Requires**: GA4 (90-day) + GSC data

**Output**: `research/performance-matrix-[YYYY-MM-DD].md`

---

#### `/research-topics`

**Purpose**: Group your ranking keywords into topic clusters using ML or pattern-based clustering.

**Usage**:
```
/research-topics
```

**Identifies**: Authority level per cluster (Strong / Moderate / Weak), coverage gaps, cluster opportunities.

**Output**: `research/topic-clusters-[YYYY-MM-DD].md`

---

### 5.5 Publishing Commands

#### `/publish-draft [filename]`

**Purpose**: Publish any draft to WordPress as Draft status.

**Usage**:
```
/publish-draft drafts/first-aid-kit-hiking-2026-03-24.md --type post
```

**Parameters**:
- `filename` (required)
- `--type post|page|custom` (optional, defaults to post)

**Maps metadata** to Yoast SEO fields: focus keyphrase, SEO title, meta description, content score.

---

### 5.6 Planning & Prioritization Commands

#### `/performance-review [days]`

**Purpose**: Analytics-driven content priorities. Combines GA4, GSC, and DataForSEO data.

**Usage**:
```
/performance-review 90
```

**Identifies**:
- Quick wins (positions 11-20, almost page 1)
- Declining content (losing rankings)
- Low CTR opportunities (high impressions, low clicks)
- Trending topics (rising interest)
- Competitor gaps (keywords competitors rank for, you don't)
- High-value conversions (content driving revenue)

**Opportunity scoring**: Impact (40pts) + Effort inverse (30pts) + Confidence (30pts)

**Output**: `research/performance-review-[YYYY-MM-DD].md` with prioritized task queue

---

#### `/priorities [quick]`

**Purpose**: Generate a consolidated content prioritization matrix.

**Usage**:
```
/priorities        # Full analysis (runs 5 modules)
/priorities quick  # Quick wins only
```

**Full mode runs**: `research_quick_wins.py`, `research_competitor_gaps.py`, `research_performance_matrix.py`, `research_priorities_comprehensive.py`

**Output**: `research/priorities-[YYYY-MM-DD].md`

---

#### `/content-calendar [posts-per-week]`

**Purpose**: Generate a dated month-long publishing calendar.

**Usage**:
```
/content-calendar 3           # 3 posts per week, current month
/content-calendar 2 --month april --focus-cluster "wound care"
```

**Distribution strategy**:
- **Week 1**: Quick wins + trending topics
- **Week 2**: Mixed (quick wins + new content)
- **Week 3**: Cluster-focused content
- **Week 4+**: Strategic/long-term pieces

**Output**: `research/content-calendar-[YYYY-MM].md`

---

## 6. Agents Reference

Agents are specialized AI roles defined in `.claude/agents/`. Commands invoke them automatically — you don't call agents directly.

| Agent | Role | When Invoked |
|-------|------|-------------|
| **content-analyzer** | Runs the 5-module Python analysis pipeline (intent, keywords, length, readability, SEO quality) | `/write`, `/rewrite`, `/optimize`, `/analyze-existing` |
| **seo-optimizer** | On-page SEO specialist. Keyword optimization, heading hierarchy, link structure. Produces 0-100 score | `/write`, `/rewrite`, `/optimize` |
| **meta-creator** | Creates 5 meta title/description variations using copywriting formulas (benefit-driven, number-based, question, problem-solution). Titles 50-60 chars, descriptions 150-160 chars | `/write`, `/rewrite`, `/optimize` |
| **internal-linker** | Maps 3-5 internal link opportunities per article. Considers user journey, link equity, cluster connectivity | `/write`, `/rewrite`, `/optimize` |
| **keyword-mapper** | Analyzes keyword placement across H1, first 100 words, H2s, body, conclusion, meta. Targets 1-2% density. Identifies LSI keywords and cannibalization risks | `/write`, `/rewrite`, `/optimize` |
| **editor** | Quality gatekeeper. Scores articles on voice (25%), specificity (25%), structure (20%), SEO (15%), readability (10%). Articles scoring <70 go to `review-required/` | Post-write quality loop |
| **headline-generator** | Creates 10+ headline variations using 10 copywriting formulas. Scores each on clarity, benefit, urgency, specificity, keyword (0-100) | `/landing-write` |
| **cro-analyst** | Conversion psychology specialist. Analyzes cognitive load, Cialdini principles, trust building, objection handling. Generates A/B test hypotheses | `/landing-write` |
| **cluster-strategist** | Designs pillar/spoke architecture. Enforces 1 primary keyword per piece, no overlap, intent separation. Scores and sequences support articles | `/cluster` |
| **performance** | Data analyst. Pulls GA4, GSC, DataForSEO data. Identifies quick wins, declining content, trending topics, competitor gaps. Scores opportunities | `/performance-review`, `/priorities` |
| **landing-page-optimizer** | CRO audit specialist. Analyzes above-fold, CTAs, trust signals, friction, structure. Produces 0-100 score. Must score ≥75 for publishing | `/landing-write`, `/landing-audit` |

---

## 7. Python Analysis Pipeline

### Core Modules (`data_sources/modules/`)

#### Content Analysis
| Module | Purpose |
|--------|---------|
| `search_intent_analyzer.py` | Classifies query intent (informational, navigational, transactional, commercial) |
| `keyword_analyzer.py` | Keyword density, distribution heatmap, stuffing detection, LSI suggestions |
| `content_length_comparator.py` | Benchmarks article length vs. top 10 SERP results for the target keyword |
| `readability_scorer.py` | Flesch Reading Ease, Flesch-Kincaid Grade Level, sentence complexity |
| `seo_quality_rater.py` | Comprehensive 0-100 SEO score across all on-page factors |
| `content_scorer.py` | Article quality scoring (voice, specificity, structure, SEO, readability) |
| `content_scrubber.py` | Removes AI watermarks, zero-width spaces, BOMs, em-dashes |

#### CRO & Landing Page Analysis
| Module | Purpose |
|--------|---------|
| `landing_page_scorer.py` | Overall landing page CRO quality score (0-100) |
| `above_fold_analyzer.py` | Analyzes headline, value prop, CTA visibility, trust signals above fold |
| `cta_analyzer.py` | CTA placement, text quality, distribution, effectiveness |
| `trust_signal_analyzer.py` | Identifies and scores testimonials, social proof, risk reversal, authority signals |
| `cro_checker.py` | CRO best practices compliance audit |

#### Data Integrations
| Module | Purpose |
|--------|---------|
| `google_analytics.py` | GA4 traffic, engagement, conversion data via API |
| `google_search_console.py` | Rankings, impressions, clicks, CTR via API |
| `dataforseo.py` | SERP positions, keyword volume, difficulty, competition via API |
| `data_aggregator.py` | Combines all data sources into unified analytics views |
| `opportunity_scorer.py` | 8-factor opportunity scoring (see below) |

#### Content Production
| Module | Purpose |
|--------|---------|
| `article_planner.py` | Content planning and outline generation |
| `section_writer.py` | Automated section writing and expansion |
| `social_research_aggregator.py` | Aggregates social research and trending topics |
| `competitor_gap_analyzer.py` | Identifies content gaps vs. competitors |
| `engagement_analyzer.py` | GA4 engagement metrics deep analysis |
| `landing_performance.py` | Landing page conversion performance metrics |
| `wordpress_publisher.py` | WordPress REST API publishing with Yoast SEO |

### Opportunity Scoring Formula

The `opportunity_scorer.py` module uses 8 weighted factors:

| Factor | Weight | What It Measures |
|--------|--------|-----------------|
| Search Volume | 25% | Monthly search volume for the target keyword |
| Position | 20% | Current ranking (closer to page 1 = higher score) |
| Search Intent | 20% | Commercial/transactional intent = higher score |
| Competition | 15% | Lower competition = higher opportunity |
| Cluster Fit | 10% | How well it fits existing topic clusters |
| CTR Potential | 5% | Click-through rate improvement potential |
| Freshness | 5% | Content age and update recency |
| Trend | 5% | Rising vs. declining search interest |

### Standalone Research Scripts

Run from the repository root:

```bash
python3 research_quick_wins.py              # Keywords on page 2 (positions 11-20)
python3 research_competitor_gaps.py          # What competitors rank for that you don't
python3 research_performance_matrix.py       # 4-quadrant content performance
python3 research_priorities_comprehensive.py # Full priority analysis
python3 research_serp_analysis.py            # SERP feature and competitor analysis
python3 research_topic_clusters.py           # ML-based topic clustering
python3 research_trending.py                 # Rising search trends
python3 seo_baseline_analysis.py             # Current position baseline
python3 seo_bofu_rankings.py                 # Bottom-of-funnel keyword rankings
python3 seo_competitor_analysis.py           # Competitor content analysis
python3 test_dataforseo.py                   # API connectivity test
```

---

## 8. Context Files

The `context/` directory contains the SurviveX brand framework that informs all content generation. These files are automatically referenced by commands and agents.

### brand-voice.md
- **Brand Position**: "Organization Under Pressure" — Prepared. Organized. Life-saving.
- **EQUIP → TRAIN → UNITE → ACT Framework**: Four pillars connecting products, education, community, and action
- **Voice Pillars**: Empowering, Professional-Grade, Practical & Organized, Trustworthy, Inclusive & Family-Focused
- **The Protector Persona**: 80% male, 28-45, family man, responsible preparer (not tactical operator or paranoid prepper)
- **Writing Style**: 12-20 word sentences, 2-4 sentence paragraphs, concrete language, active verbs
- **Quality Checklist**: 14-point pre-publishing verification

### style-guide.md
- Grammar, punctuation, capitalization rules
- Word choice preferences (e.g., "first aid kit" not "medical kit")
- Formatting standards (bold, italics, lists, links, callouts)
- Content structure templates (intro 150-250 words, sections 150-500 words)
- SEO-specific style (meta titles 50-60 chars, descriptions 150-160 chars)
- Accessibility: 8th-10th grade reading level, screen-reader friendly

### seo-guidelines.md
- **Content length targets**: Blog 1,000-2,000 words, Pillar 2,000-3,000 words, How-To 1,000-2,000 words, Quick Tips 500-800 words
- **Keyword density**: 1-2% primary, 0.5-1% secondary
- **Critical keyword placements**: H1, first 100 words, H2s, conclusion, meta, URL
- **Internal links**: 3-5 per article (Pillar 1-2, Related 2-3, Product 0-1)
- **External links**: 2-3 authority sources (NIH, Mayo Clinic, Red Cross, CDC, OSHA)
- **Featured snippet optimization**: Question-based, list-based, table-based, definition formats
- **E-A-T standards**: Expertise, Authoritativeness, Trustworthiness guidelines

### target-keywords.md
**6 keyword clusters** with volume, difficulty, intent, and product mapping:

| Cluster | Pillar Keyword | Monthly Volume | Difficulty |
|---------|---------------|----------------|------------|
| First Aid Kits | "first aid kit" | 110,000+ | Very High |
| Zip Stitch Wound Closures | "wound closure strips" | 2,900 | Medium |
| Israeli Bandages & Trauma | "israeli bandage" | 2,400 | Medium |
| Travel Medicine Kit | "travel medicine kit" | 2,900 | Medium |
| Burn Care | "burn dressing" | 1,600 | Medium |
| Bleeding Control | "hemostatic gauze" | 1,600 | Medium |

**Seasonal calendar**: Q1 FSA/HSA, Q2 Outdoor, Q3 Water Sports, Q4 Holiday Gifting

### features.md
- **9 core value propositions** with features, benefits, and conversion angles
- **Product line** with pricing: Large ($120.99), Large Pro ($150.99), Waterproof ($150.99), Small ($54.99), plus specialized products
- **Competitive differentiators** vs. cheap mass-market, tactical brands, and DIY
- **Use cases by segment**: Families, Outdoor, Vehicle & Travel, Workplace, Emergency Prep, Water Sports
- **Pain point solutions** and FAQ answers

### internal-links-map.md
- **14 product pages** with URLs and anchor text suggestions
- **9 collection pages**
- **11 published blog articles** with URLs
- **6 topic cluster link maps**
- **Linking best practices**: Tier 1-3 priority, do/don't rules
- **Quick reference by topic** for fast linking decisions

### competitor-analysis.md
- **6 primary competitors** analyzed: MyMedic, North American Rescue, Uncharted Supply Co., Everlit, Rhino Rescue, Adventure Medical Kits
- **SurviveX competitive moats**:
  1. "Organization under pressure" — completely unoccupied territory
  2. EQUIP→TRAIN→UNITE→ACT framework
  3. Chase Carter, EMT-P — named authority
  4. Three-niche strategy with one voice
  5. DTC content engine + Amazon strength
- **Content opportunity matrix** by priority level

### cro-best-practices.md
- Above-the-fold rules (5-second test)
- CTA formulas: `[Action Verb] + [Benefit] + [Urgency]`
- CTA placement strategy: Hero (0-20%), Post-Problem (30-40%), Post-Proof (60-70%), Closing (90-100%)
- Trust signal hierarchy (specific results → named testimonials → customer count → star ratings → logos)
- Form optimization (each field ≈ 10% conversion drop)
- Psychology principles: Scarcity, Social Proof, Authority, Reciprocity, Urgency
- Conversion benchmarks: Lead (5-10% avg), Demo (2-4% avg), Trial (3-5% avg)

### writing-examples.md
- 5 detailed competitor article examples with style analysis
- SurviveX adaptation notes
- Content creation quick reference: Author (Chase Carter, EMT-P), word count (800-1,500), tone (conversational expert), structure guidelines

---

## 9. WordPress Integration

### Components

1. **MU-Plugin** (`wordpress/seo-machine-yoast-rest.php`)
   - Exposes Yoast SEO fields via REST API
   - Fields: `_yoast_wpseo_focuskw`, `_yoast_wpseo_title`, `_yoast_wpseo_metadesc`, `_yoast_wpseo_linkdex`, `_yoast_wpseo_content_score`

2. **Publisher Module** (`data_sources/modules/wordpress_publisher.py`)
   - REST API client for creating/updating posts and pages
   - Supports Yoast metadata, categories, tags, featured images
   - Authentication via WordPress application password

3. **Publishing Commands**
   - `/publish-draft [file]` — Publish articles as posts (draft status)
   - `/landing-publish [file]` — Publish landing pages as pages (draft status, requires audit score ≥75)

### Setup

1. Upload `wordpress/seo-machine-yoast-rest.php` to `wp-content/mu-plugins/`
2. Generate a WordPress application password (Users → Your Profile → Application Passwords)
3. Add credentials to `data_sources/config/.env`
4. Articles are published as **drafts** — you review and publish manually in WordPress

---

## 10. Directory Structure

```
seomachine/
├── .claude/
│   ├── commands/          # 23 slash command definitions
│   │   ├── analyze-existing.md
│   │   ├── article.md
│   │   ├── cluster.md
│   │   ├── content-calendar.md
│   │   ├── landing-audit.md
│   │   ├── landing-competitor.md
│   │   ├── landing-publish.md
│   │   ├── landing-research.md
│   │   ├── landing-write.md
│   │   ├── optimize.md
│   │   ├── performance-review.md
│   │   ├── priorities.md
│   │   ├── publish-draft.md
│   │   ├── research.md
│   │   ├── research-gaps.md
│   │   ├── research-performance.md
│   │   ├── research-serp.md
│   │   ├── research-topics.md
│   │   ├── research-trending.md
│   │   ├── rewrite.md
│   │   ├── scrub.md
│   │   └── write.md
│   └── agents/            # 11 specialized agent definitions
│       ├── cluster-strategist.md
│       ├── content-analyzer.md
│       ├── cro-analyst.md
│       ├── editor.md
│       ├── headline-generator.md
│       ├── internal-linker.md
│       ├── keyword-mapper.md
│       ├── landing-page-optimizer.md
│       ├── meta-creator.md
│       ├── performance.md
│       └── seo-optimizer.md
├── context/               # Brand & SEO framework (SurviveX-specific)
│   ├── brand-voice.md
│   ├── competitor-analysis.md
│   ├── cro-best-practices.md
│   ├── features.md
│   ├── internal-links-map.md
│   ├── seo-guidelines.md
│   ├── style-guide.md
│   ├── target-keywords.md
│   └── writing-examples.md
├── data_sources/
│   ├── config/
│   │   ├── .env           # API credentials
│   │   └── competitors.json
│   ├── modules/           # 24 Python analysis modules
│   └── requirements.txt   # Python dependencies
├── credentials/           # GA4 service account JSON
├── wordpress/             # WordPress integration files
│   └── seo-machine-yoast-rest.php
├── topics/                # Content ideas
├── research/              # Research briefs & analysis
├── drafts/                # Work-in-progress articles
├── rewrites/              # Updated content
├── landing-pages/         # Conversion-optimized pages
├── audits/                # Audit reports
├── review-required/       # Articles needing human review
├── published/             # Final approved content
├── manuals/               # This manual
├── CLAUDE.md              # Workspace instructions for Claude Code
├── research_*.py          # Standalone research scripts (11)
├── seo_*.py               # SEO analysis scripts
└── test_dataforseo.py     # API connectivity test
```

---

## 11. Workflows & Recipes

### Recipe 1: Quick Win Optimization (5-10 minutes per article)

Best for: Articles ranking on page 2 (positions 11-20) that need a small push to page 1.

```
1. /priorities quick                          # Find quick win opportunities
2. /analyze-existing [URL of target article]  # Identify specific issues
3. /optimize [file]                           # Get prioritized fix list
4. Apply fixes (meta title/description, add internal links, update headings)
5. /publish-draft [file]                      # Push to WordPress
```

### Recipe 2: New Article from Scratch (1-2 hours)

```
1. /research [topic]              # Generate research brief
2. /research-serp "[keyword]"     # Analyze what's ranking
3. /write [topic]                 # Write + auto-optimize (5 agents run)
4. Review the draft + companion reports
5. /publish-draft [file]          # Publish when ready
```

### Recipe 3: Deep Research Article (2-3 hours)

```
1. /research [topic]              # Keyword + competitive research
2. /research-serp "[keyword]"     # Deep SERP analysis
3. /article [topic]               # Full pipeline: SERP + social + write + optimize
4. Review all generated reports
5. /publish-draft [file]
```

### Recipe 4: Topic Cluster Build (multi-day project)

```
1. /research-topics               # Identify weak clusters
2. /cluster [topic]               # Design pillar + 8-12 support articles
3. Review cluster strategy document
4. Publish pillar article first
5. Publish support articles in priority order (1-2 per day)
6. Verify internal linking map is implemented
```

### Recipe 5: Landing Page Creation (1-2 hours)

```
1. /landing-research [topic]                 # Research brief
2. /landing-competitor [competitor URL]       # Analyze competitor page
3. /landing-write [topic] --type seo --goal lead  # Create page
4. /landing-audit [file] --goal lead         # Must score ≥75
5. Fix issues if score < 75, re-audit
6. /landing-publish [file]                   # Publish to WordPress
```

### Recipe 6: Monthly Content Planning

```
1. /performance-review 30                    # Last 30 days analysis
2. /research-trending                        # What's trending now
3. /research-gaps                            # Competitor gap opportunities
4. /priorities                               # Consolidated priority matrix
5. /content-calendar 3                       # 3 posts/week calendar
```

### Recipe 7: Content Rewrite/Refresh

```
1. /analyze-existing [URL]        # Audit current content
2. /research-serp "[keyword]"     # Check current SERP landscape
3. /rewrite [topic]               # Rewrite with fresh data + auto-optimize
4. Compare rewrite vs. original
5. /publish-draft [file]
```

### Recipe 8: Competitive Intelligence

```
1. /research-gaps                            # Keywords competitors rank for
2. /landing-competitor [competitor URL]       # Analyze their pages
3. Review context/competitor-analysis.md     # Existing competitive intel
4. /research [topic]                         # Research their strongest topics
```

---

## 12. Troubleshooting

### Commands Not Working

- Ensure you're running Claude Code from the `seomachine/` directory
- Commands are defined in `.claude/commands/` — check the file exists
- Slash commands are case-sensitive and use hyphens (e.g., `/research-serp`, not `/research_serp`)

### Python Script Errors

```bash
# Check dependencies are installed
pip install -r data_sources/requirements.txt

# Test API connectivity
python3 test_dataforseo.py
```

### API Issues

- **GA4**: Ensure `credentials/ga4-credentials.json` exists and the service account has Viewer access to your GA4 property
- **GSC**: Ensure the service account has access to your Search Console property
- **DataForSEO**: Test with `python3 test_dataforseo.py`
- **WordPress**: Ensure application password is generated (not your login password), and the MU-plugin is installed

### Content Quality Issues

- Articles scoring below 70 go to `review-required/` — this is by design
- The `editor` agent is the quality gatekeeper
- Run `/scrub [file]` manually if AI artifacts persist
- Check `context/brand-voice.md` if tone feels wrong

### Landing Page Publishing Blocked

- Landing pages require an audit score ≥75 before `/landing-publish` will work
- Run `/landing-audit [file]` to see what needs fixing
- Address the 5 audit dimensions: above-fold, CTAs, trust signals, friction, structure

### Missing Context

- All context files must be in `context/` — commands reference them by path
- If content doesn't match SurviveX brand voice, verify `context/brand-voice.md` and `context/style-guide.md` are present
- Internal linking relies on `context/internal-links-map.md` being current

---

## Quick Reference Card

| I want to... | Command |
|---------------|---------|
| Write a new blog article | `/write [topic]` |
| Write a research-heavy article | `/article [topic]` |
| Build a topic cluster | `/cluster [topic]` |
| Rewrite existing content | `/rewrite [topic]` |
| Create a landing page | `/landing-write [topic] --type seo --goal lead` |
| Audit a landing page | `/landing-audit [file]` |
| Optimize an article's SEO | `/optimize [file]` |
| Audit existing content | `/analyze-existing [URL or file]` |
| Research a keyword | `/research [topic]` |
| Analyze a SERP | `/research-serp "[keyword]"` |
| Find competitor gaps | `/research-gaps` |
| Find trending topics | `/research-trending` |
| Check content performance | `/research-performance` |
| Review overall performance | `/performance-review` |
| Get content priorities | `/priorities` |
| Plan a content calendar | `/content-calendar 3` |
| Publish to WordPress | `/publish-draft [file]` |
| Clean AI artifacts | `/scrub [file]` |
| Analyze a competitor page | `/landing-competitor [URL]` |
| Find topic clusters | `/research-topics` |
