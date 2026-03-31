# Titan Direct Response System — Complete User Manual

**Version:** 2.0 (SurviveX Edition)
**Last Updated:** March 2026
**System Size:** 28 core files (~9,000 lines) across copywriting, design, and production

---

## Table of Contents

1. [What Is the Titan-DR-System?](#1-what-is-the-titan-dr-system)
2. [Directory Structure & File Map](#2-directory-structure--file-map)
3. [The Modular Load Architecture](#3-the-modular-load-architecture)
4. [The 7-Step Execution Workflow](#4-the-7-step-execution-workflow)
5. [The 7 Critical Rules](#5-the-7-critical-rules)
6. [The Ten Commandments of the Titan](#6-the-ten-commandments-of-the-titan)
7. [Core Psychology Framework](#7-core-psychology-framework)
8. [Core Language System](#8-core-language-system)
9. [Core Storytelling System](#9-core-storytelling-system)
10. [Format: Facebook/Meta Ads](#10-format-facebookmeta-ads)
11. [Format: Video Sales Letters (VSLs)](#11-format-video-sales-letters-vsls)
12. [Format: Native Story VSLs (Roosevelt Format)](#12-format-native-story-vsls-roosevelt-format)
13. [Format: Landing Pages / Sales Pages](#13-format-landing-pages--sales-pages)
14. [Format: Listicles / Pre-Sale Pages](#14-format-listicles--pre-sale-pages)
15. [Format: Advertorials / Native Ads](#15-format-advertorials--native-ads)
16. [Format: Email Sequences](#16-format-email-sequences)
17. [Format: Quiz Funnels](#17-format-quiz-funnels)
18. [Compliance Framework (Tier 1/Tier 2)](#18-compliance-framework-tier-1tier-2)
19. [The Hook Library & Video Hooks](#19-the-hook-library--video-hooks)
20. [The Swipe File](#20-the-swipe-file)
21. [SurviveX Product Knowledge](#21-survivex-product-knowledge)
22. [SurviveX Multi-Page Strategy](#22-survivex-multi-page-strategy)
23. [Design System (Titan Conversion Designer)](#23-design-system-titan-conversion-designer)
24. [Production Pipelines](#24-production-pipelines)
25. [Verification System (titan-verify)](#25-verification-system-titan-verify)
26. [Video Analyzer](#26-video-analyzer)
27. [Quick-Start Examples](#27-quick-start-examples)
28. [Appendix: Complete File Checklist](#28-appendix-complete-file-checklist)

---

## 1. What Is the Titan-DR-System?

The Titan Direct Response System (v2.0) is a **modular AI copywriting framework** that produces high-converting direct response copy for DTC (Direct-to-Consumer) brands. It is built from analysis of 8-figure brands, 5,104 winning DTC ads across 84 verified brands, and deployed specifically for **SurviveX** — a premium first aid kit and trauma care brand.

**Core Principle:** Write to the motivated 5%. Ignore the rest.

The system does NOT work as a single monolithic prompt. Instead, it uses **smart routing** — loading only the specific psychology, format structure, and compliance rules needed for each task. This prevents context window bloat and ensures the AI receives focused, relevant instructions.

### What It Covers

| Category | Formats |
|----------|---------|
| **Paid Advertising** | Facebook/Meta ads, Instagram ads, video ads |
| **Video** | VSLs (Video Sales Letters), Native Story VSLs, UGC scripts |
| **Long-Form** | Landing pages, sales pages, listicles, advertorials |
| **Funnels** | Quiz funnels, email sequences, post-purchase flows |
| **Design** | Ad creative production, visual patterns, compositing |
| **Quality** | Copy verification, video analysis, compliance auditing |

### What Makes It Different

1. **Psychology-first** — Every piece of copy deploys named cognitive biases, neurochemical sequencing, and NLP patterns. Nothing is generic.
2. **Compliance-built-in** — A two-tier word system (Tier 1 Death Zone / Tier 2 Profit Zone) with 6 Shield Protocols prevents ad bans and regulatory issues.
3. **Format-specific blueprints** — Each content type has its own structural blueprint with exact section order, word budgets, and deployment rules.
4. **Verification** — A post-production auditor (titan-verify) checks whether Titan techniques were actually deployed. If the copy could have been written without Titan, it fails.

---

## 2. Directory Structure & File Map

```
Titan-DR-System/
├── titan-dr-instructions.md          ← Setup guide & quick-start
│
├── titan-dr/                         ← PRIMARY COPY (master files)
│   ├── SKILL.md                      ← Main router & execution workflow
│   ├── titan-router.md               ← Routing logic
│   ├── titan-router.json             ← Routing data
│   │
│   ├── core/                         ← ALWAYS LOADED (3 files)
│   │   ├── titan-psychology.md       ← 50 biases, Schwartz, neurochemistry
│   │   ├── titan-language.md         ← Headlines, NLP, quality gate
│   │   └── titan-storytelling.md     ← 7 story arcs, character blueprints
│   │
│   ├── formats/                      ← LOAD PER TASK (8 files)
│   │   ├── titan-facebook-ads.md     ← Facebook/Meta/Instagram ads
│   │   ├── titan-vsl.md              ← Video Sales Letters
│   │   ├── titan-story-vsl.md        ← Native Story VSLs (Roosevelt format)
│   │   ├── titan-advertorial.md      ← Advertorials / native ads
│   │   ├── titan-landing-page.md     ← Landing pages / sales pages
│   │   ├── titan-email.md            ← Email sequences
│   │   ├── titan-listicle.md         ← Listicles / pre-sale pages
│   │   └── titan-quiz-funnel.md      ← Quiz funnels
│   │
│   └── references/                   ← LOAD AS NEEDED
│       ├── titan-words-forbidden.md  ← Compliance (ALWAYS LOADED)
│       ├── titan-words-approved.md   ← Power words & vocabulary
│       ├── titan-hook-library.md     ← 21 hook types from 6,812 ads
│       ├── titan-video-hooks.md      ← Video-specific hooks
│       ├── titan-swipe-file.md       ← High-converting copy blocks
│       ├── survivex-products.md      ← SurviveX product specs
│       ├── survivex-multi-page-strategy.md ← Landing page strategy
│       ├── titan-expert-panel.md     ← (RETIRED in v2.0)
│       ├── dr-copy-examples.md       ← Legacy v1 executed examples
│       ├── dr-copy-examples-ext.md   ← Legacy v1 extended examples
│       ├── dr-copy-voice.md          ← Legacy v1 voice registers
│       ├── dr-copy-formats.md        ← Legacy v1 format blueprints
│       ├── dr-compliance.md          ← Legacy v1 compliance
│       ├── dr-copy-language.md       ← Legacy v1 language
│       ├── dr-copy-strategy.md       ← Legacy v1 strategy
│       └── dr-visual.md             ← Visual/creative direction
│
├── titan-dr-share/                   ← DISTRIBUTED VERSION (duplicates + extensions)
│   ├── README.md
│   ├── copywriting/titan-dr/        ← Mirror of titan-dr/ (identical files)
│   ├── design/                       ← DESIGN EXTENSIONS
│   │   ├── titan-conversion-designer/
│   │   │   ├── SKILL.md
│   │   │   ├── visual-patterns.md
│   │   │   ├── design-psychology.md
│   │   │   ├── copy-on-image.md
│   │   │   ├── copy-design-workflow.md
│   │   │   ├── fotw-design-patterns.md
│   │   │   └── references/gemini-multimodal.md
│   │   └── titan-ads/ (deprecated → merged into titan-conversion-designer)
│   └── production/                   ← PRODUCTION PIPELINES
│       ├── vsl-production.md
│       ├── copy-production.md
│       ├── copy-audit.md
│       └── titan-verify.md
```

**Note:** Files in `titan-dr-share/copywriting/titan-dr/` are identical copies of `titan-dr/`. The `titan-dr-share/` directory adds design and production extensions.

---

## 3. The Modular Load Architecture

### The "Core 3" — Always Load

Every copywriting task requires these three files, no exceptions:

| # | File | What It Provides |
|---|------|-----------------|
| 1 | `core/titan-psychology.md` | 50 cognitive biases, Schwartz Market Awareness (5 levels), Market Sophistication (5 stages), neurochemical sequencing (cortisol→dopamine→oxytocin), Triune Brain model, 7 evolutionary drivers |
| 2 | `core/titan-language.md` | Master Headline Formula (I=B+C), 13 Schwartz Strengtheners, 25 NLP patterns, 10 Conversion Killers, Silent Quality Gate (10 lenses), 20 voice registers (R1-R20) |
| 3 | `references/titan-words-forbidden.md` | Tier 1/Tier 2 compliance system, 6 Shield Protocols, Meta 2025+ CAPI workarounds, Personal Attributes Trap rules, Titan Thesaurus (3-column word swaps) |

### Format Routing Table — Load Per Task

| When the task is... | Load these additional files |
|--------------------|-----------------------------|
| Facebook / Meta / Instagram ad | `formats/titan-facebook-ads.md` + `references/titan-hook-library.md` |
| VSL / video script | `formats/titan-vsl.md` + `core/titan-storytelling.md` |
| Native story video (Roosevelt format) | `formats/titan-story-vsl.md` + `references/titan-video-hooks.md` + `references/titan-hook-library.md` |
| Listicle / pre-sale page | `formats/titan-listicle.md` |
| Advertorial / native ad | `formats/titan-advertorial.md` + `core/titan-storytelling.md` |
| Landing page / sales page | `formats/titan-landing-page.md` + (optional) `core/titan-storytelling.md` |
| Quiz funnel | `formats/titan-quiz-funnel.md` |
| Email sequence | `formats/titan-email.md` |
| UGC brief / influencer script | `references/titan-video-hooks.md` + `references/titan-hook-library.md` |
| Copy audit / verification | All relevant format files + `core/titan-psychology.md` |
| Visual ad design | `design/titan-conversion-designer/SKILL.md` + `visual-patterns.md` |

### Optional Reference Files

| File | When to Load |
|------|-------------|
| `references/titan-words-approved.md` | When you need power word vocabulary |
| `references/titan-swipe-file.md` | When you need proven copy block patterns |
| `references/survivex-products.md` | When writing SurviveX-specific copy (recommended for all SurviveX tasks) |
| `references/survivex-multi-page-strategy.md` | When planning multi-page funnel strategy |
| `core/titan-storytelling.md` | For any format requiring narrative (VSL, advertorial, story ads) |

---

## 4. The 7-Step Execution Workflow

Every piece of copy follows this exact process:

### Step 1: Identify Format and Avatar

- What is the deliverable format? (ad, VSL, email, landing page, etc.)
- Who is the target avatar? (demographics, pain points, awareness level)

### Step 2: Load Files (Smart Routing)

- Load the 3 core files
- Load the format-specific file(s) from the routing table
- Confirm all files are loaded before writing

### Step 3: Strategic Assessment (MANDATORY — Must Output Before Writing)

Determine and explicitly state ALL of:

| Element | What to Determine |
|---------|-------------------|
| **Awareness Level** (1-5) | Drives headline type, lead structure, proof intensity |
| **Sophistication Stage** (1-5) | Drives mechanism emphasis vs. claim vs. identity |
| **Named Mechanism** | UMP (Unique Mechanism of Problem) + UMS (Unique Mechanism of Solution) — REQUIRED |
| **Dominant Emotional Driver** | Cortisol → Dopamine → Oxytocin sequence |
| **Voice Register** (R1-R20) | From the 20-register system |
| **Biases to Deploy** | List 8-12 by name |

**Example Strategic Assessment:**
```
Awareness Level: L3 (Solution-Aware)
Sophistication Stage: S3 (Feature fatigue — need differentiated mechanism)
UMP: "The Freeze" — disorganization under pressure causes 47-second delay
UMS: "Organization Under Pressure" — color-coded triage system
Dominant Driver: Cortisol (fear of being unprepared) → Dopamine (discovery of system)
Voice Register: R5 (Aspirational Protector)
Biases: Loss Aversion, Specificity, Social Proof, Authority, Anchoring,
        Curiosity Gap, Negativity Bias, Contrast Effect, Commitment/Consistency
```

### Step 4: Draft Using Format Structure

- Follow the format file's structural blueprint exactly
- Plan section-by-section word budgets BEFORE writing
- Count words and validate against target

### Step 5: Apply Language Engine

- Headline formula based on awareness level
- Schwartz Strengtheners on every headline and key claim
- NLP patterns embedded throughout body copy
- Metaphor from swipe file for mechanism explanation
- Eliminate all 10 Conversion Killers
- Quality Gate: 10 lenses, 90+ threshold to pass

### Step 6: Compliance Check

- Zero Tier 1 triggers anywhere (INCLUDING testimonials)
- All Tier 2 terms shielded with correct Shield Protocol
- No "YOU + Negative" framing (Personal Attributes rule)
- Testimonial disclaimers present
- War Room audit: extract all health/safety terms → check each against Tier system

### Step 7: Quality Output

Deliver copy WITH metadata:
- Awareness level used
- Sophistication stage
- Named mechanism (UMP/UMS)
- Register used
- Format loaded
- Biases deployed (list by name and count)
- Word count

---

## 5. The 7 Critical Rules

These apply to ALL formats, ALL tasks, ALL copy. Memorize them.

1. **Every sentence does at least two jobs.** Informs + persuades. Agitates + opens loop. Proves + builds desire.
2. **Benefits lead. Features justify.** Never reverse the order.
3. **"You" not "We."** The copy is about them, not you.
4. **Short sentences. Fragments for emphasis. Like this.**
5. **Specific over general.** "$1.63/day" not "affordable." "31,482 people" not "thousands."
6. **Voice must match avatar exactly.** If it could be for anyone, it's for no one.
7. **Compliance always.** No Tier 1 trigger is ever worth the risk.

---

## 6. The Ten Commandments of the Titan

The foundational laws. Violate any one and the copy underperforms.

| # | Commandment |
|---|-------------|
| I | Thou shalt always Agitate (Reptilian) before Emotionalizing (Limbic) before Rationalizing (Neocortex). |
| II | Thou shalt never sell features when benefits convert. |
| III | Thou shalt agitate pain before presenting relief. |
| IV | Thou shalt always provide a Unique Mechanism (UMP/UMS). |
| V | Thou shalt stack social proof relentlessly and specifically. |
| VI | Thou shalt reverse all risk with ironclad guarantees. |
| VII | Thou shalt create urgency through legitimate scarcity. |
| VIII | Thou shalt test continuously and trust only data. |
| IX | Thou shalt study the masters and adapt their wisdom. |
| X | Thou shalt create genuine value first, and conversion will follow. |

---

## 7. Core Psychology Framework

**Source file:** `core/titan-psychology.md`

### Schwartz Market Awareness (5 Levels)

| Level | Buyer Knowledge | Headline Type | Proof Intensity |
|-------|-----------------|---------------|-----------------|
| **L1 — Most Aware** | Knows product, why to buy, what differentiates | Offer angle | Soft — brief mention |
| **L2 — Product-Aware** | Knows product exists, may have used before | Mechanism/differentiation | Moderate — comparative |
| **L3 — Solution-Aware** | Knows solution exists, doesn't know THIS solution | Root cause reveal | High — detailed mechanism |
| **L4 — Problem-Aware** | Knows problem, no solution in mind | Problem + urgency | Very high — full education |
| **L5 — Completely Unaware** | No awareness of problem or solution | Story/identity entry | Massive — complete narrative |

**The Cascade Rule:** If audience is L3, assume some are L4. If L4, assume some are L5. Add content for the less-aware segment.

### Schwartz Market Sophistication (5 Stages)

| Stage | Market Condition | Copy Focus | Escape Tactic |
|-------|-----------------|-----------|--------------|
| S1 | First to market | State benefits clearly | "This works" |
| S2 | Multiple competitors | Mechanism emphasis | "Here's why it works" |
| S3 | Feature fatigue | Differentiated mechanism | Name the unique mechanism |
| S4 | Claims fatigue | Identity/belonging | "For people like you" |
| S5 | Ultimate saturation | Premium/exclusive | "Only we" |

### The Neurochemical Playbook

**Required sequence (non-negotiable):**
```
AGITATE (Reptilian/Cortisol) → EMOTIONALIZE (Limbic/Oxytocin) → RATIONALIZE (Neocortex)
```

| Chemical | Role | Deploy In |
|----------|------|-----------|
| **Cortisol** | Attention Architect — grabs attention through fear/threat | Agitation, problem statements, risk of inaction |
| **Dopamine** | Seeking Chemical — fires during anticipation and discovery | Mechanism reveals, open loops, future pacing |
| **Oxytocin** | Trust Binder — releases through vulnerability and community | Social proof, testimonials, shared struggles |

### The 50 Cognitive Biases

**Core Biases (23):** Loss Aversion, Specificity Bias, Social Proof/Bandwagon, Identifiable Victim Effect, Authority Bias, Anchoring, Scarcity, Commitment/Consistency, Confirmation Bias, Curiosity Gap/Zeigarnik, Negativity Bias, Sunk Cost, Zero-Risk Bias, IKEA Effect, Contrast/Decoy Effect, Endowment Effect, Hyperbolic Discounting, In-Group/Out-Group, Reciprocity, Reactance, Status-Quo Bias, Cognitive Dissonance/Shadow Self, Urgency/FOMO

**Extended Arsenal (22):** Peak-End Rule, Mere Exposure, Rhyme-as-Reason, Picture Superiority, Serial Position, Spotlight Effect, Dunning-Kruger, Halo Effect, Ambiguity Effect, Default Effect, Generation Effect, Self-Serving Bias, Clustering Illusion, Choice Overload, Narrative Bias, Frequency Illusion, Hot-Cold Empathy, Availability Heuristic, Optimism Bias, Denomination Effect, Nostalgia Effect, Empathy Gap

**FOTW Addition (5 — 2026):** Blame Transfer, Mechanism Naming, Quiz Commitment, Delegation Appeal, Cultural Moment Hijack

**Deployment rule:** Minimum 5 biases per copy piece. Map each bias to a specific section with citations.

### The 7 Evolutionary Drivers

Every purchase decision traces to one of these survival mechanisms:
1. **Survival** — Am I safe?
2. **Reproduction** — Am I attractive/successful?
3. **Status** — Where do I rank?
4. **Tribe** — Do I belong?
5. **Certainty** — Can I predict outcomes?
6. **Autonomy** — Am I in control?
7. **Fairness** — Am I being treated fairly?

---

## 8. Core Language System

**Source file:** `core/titan-language.md`

### Master Headline Formula: I = B + C

**Interest = Benefit + Curiosity**

| Component | Definition | Example |
|-----------|-----------|---------|
| **I (Interest)** | Hooks the reader | "The One Thing..." / "Why..." |
| **B (Benefit)** | The outcome they get | "Find supplies in under 10 seconds" |
| **C (Curiosity)** | Opens a loop | "Most kits don't have this" |

**Combined Example:** "The One Thing Most First Aid Kits Are Missing (And It Could Cost You Hours in an Emergency)"

### Entry Device × Awareness Level Routing

| Entry Device | L1 | L2 | L3 | L4 | L5 |
|---|---|---|---|---|---|
| **How To...** | offer | ✓ | ✓ | ✓ | ✓ |
| **Why...** | mechanism | ✓ | ✓ | ✓✓ | ✓ |
| **The [Adj] [Noun] That...** | | | ✓ | ✓ | ✓ |
| **[Number] [Frame]** | | ✓ | ✓ | ✓ | ✓ |
| **Warning / What NOT To** | | ✓ | ✓✓ | ✓ | |
| **[Person] + [Story]** | | | | ✓✓ | ✓✓ |

### The [Number] [Frame] Sub-System (10 Frames)

1. Reasons — "10 Reasons Why..."
2. Rules — "The 7 Rules That..."
3. Ways — "5 Ways To..."
4. Mistakes — "The 3 Mistakes People Make..."
5. Secrets — "The 5 Secrets Nobody Tells You..."
6. Warnings — "The 4 Warning Signs..."
7. Facts — "The 8 Facts About..."
8. Types — "The 6 Types of..."
9. Myths — "3 Myths Debunked..."
10. Levels — "The 5 Levels of..."

### The 13 Schwartz Strengtheners

Apply to every headline and key claim:

1. **Intensify desire** — "Dramatically," "Radically," "Completely"
2. **Extend beyond expected** — "More than just X, also..."
3. **Eliminate effort** — "Without training," "Instantly," "Automatically"
4. **Quantify result** — "250 components," "47 seconds," "$1.63/day"
5. **Add time specificity** — "Within 72 hours," "By Tuesday"
6. **Name the enemy** — "The Freeze," "Kit Chaos"
7. **Use case studies** — "How Sarah M., 43, from Portland..."
8. **Add mechanism** — "Via color-coded compartments"
9. **Stack benefits** — "Faster + safer + easier + more organized"
10. **Specify audience** — "For families with kids 5-12"
11. **Add surprise reversal** — "But what most people don't realize..."
12. **Use contrast** — "Unlike drugstore kits... SurviveX..."
13. **Future pace** — "Picture it: It's Saturday afternoon at the park..."

### The 25 NLP Patterns

Embed throughout body copy: Presupposition, Embedded Command, Analog Marking, Temporal Predicate Shift, Mind Read, Lost Performative, Cause-Effect Linkage, Complex Equivalence, Tag Question, Double Bind, Conversational Postulate, Selectional Restriction Violation, Ambiguity (Phonological, Syntactic, Scope), Utilization, Pacing & Leading, Truism, Yes-Set, Agreement Frame, Reframing, Metaphor, Nominalization, Modal Operator, Deletion

**Minimum deployment:** 3 patterns per copy piece (verification requires this).

### The 10 Conversion Killers (Eliminate All)

1. **Vague claims** — No specificity
2. **Feature-first** — Benefits must lead
3. **Passive voice** — Use active
4. **Fake urgency** — Must be real constraint
5. **Adverb overuse** — "Very," "really," "actually"
6. **Hedging language** — "Might," "could," "may"
7. **Generic proof** — "Thousands of happy customers"
8. **Buried offer** — Below fold or after too much text
9. **Wall of text** — No visual breaks
10. **"We" copy** — Must be "You" focused

### The Silent Quality Gate (10 Review Lenses)

| Lens | What It Checks |
|------|---------------|
| 1 — Schwartz | Does every section apply one of the 7 Schwartz techniques? |
| 2 — Bencivenga | Are IF/THEN constructions stacked for logical progression? |
| 3 — Neurochemical | Cortisol → Dopamine → Oxytocin sequence correct? |
| 4 — Bias | Minimum 5 biases deployed with specific locations? |
| 5 — Voice | Register consistent throughout? Matches avatar? |
| 6 — Compliance | Zero Tier 1? All Tier 2 shielded? Personal Attributes clean? |
| 7 — Structure | Format blueprint followed exactly? |
| 8 — Proof | Proof blocks present and specific? |
| 9 — Offer | Offer clear, valuable, risk-reversed? |
| 10 — Pattern-Interrupt | Grabs attention? Maintains forward momentum? |

**Scoring:** 90+ = PASS. 70-89 = REWRITE. Below 70 = START OVER.

### The 20 Voice Registers (R1-R20)

The system provides 20 voice registers for matching copy tone to avatar. Key registers include:

- **R1:** Clinical Authority (doctor/researcher tone)
- **R2:** Empathetic Peer (shared struggle)
- **R3:** Direct Commander (urgent, imperative)
- **R4:** Educational Guide (patient teacher)
- **R5:** Aspirational Protector (identity-based, "be the hero")
- **R6-R20:** Additional specialized registers for different demographics and emotional targets

**Selection rule:** Choose based on avatar demographics, awareness level, and emotional state. Voice must be consistent throughout — never switch mid-piece without deliberate fractionation.

---

## 9. Core Storytelling System

**Source file:** `core/titan-storytelling.md`

### The 7 Story Arcs

1. **Hidden Enemy** — An invisible force causing the problem (e.g., inadequate first aid kits as the hidden threat)
2. **Forbidden Secret** — Knowledge being suppressed or overlooked (e.g., what EMTs know that you don't)
3. **Accidental Discovery** — Stumbling upon a solution (e.g., discovering color-coded organization works)
4. **Betrayal** — Trusted sources failing you (e.g., cheap kits with expired supplies)
5. **Transformation Journey** — From unprepared to confident protector
6. **Expert Confession** — Professional reveals insider knowledge (e.g., Chase Carter's EMT experience)
7. **Ancient/Foreign Secret** — Wisdom from another time/place (e.g., battlefield medicine principles)

### The 4 Character Blueprints

1. **Zero to Hero** — Ordinary person becomes capable responder
2. **Against All Odds** — Overcoming a crisis with the right tools
3. **Real-World Desperation** — Relatable emergency scenario
4. **Unknown Prophet** — The expert nobody listened to (until now)

### Key Storytelling Techniques

- **Fractionation:** Emotional DOWN/UP bounces that intensify engagement
- **Open Loops (Zeigarnik Effect):** Start stories, delay resolution — reader must keep reading to close the loop. Close loops in LIFO order (last opened, first closed).
- **Rock Bottom Formula:** The lowest moment creates oxytocin bonding
- **Future Pacing:** Vivid description of life AFTER the solution

---

## 10. Format: Facebook/Meta Ads

**Source file:** `formats/titan-facebook-ads.md`

### The Andromeda Algorithm Reality (2025-2026)

- **Before Andromeda:** You targeted audiences, delivered creative.
- **After Andromeda:** The algorithm reads your creative content to FIND the audience.
- **Key insight:** Creative IS the targeting. Language + imagery signals who should see the ad.

### The Scroll-Stopper Anatomy

The brain processes feed content in 88ms. Must hit 2+ Salience triggers:

1. **CONTRAST** — Breaks expected feed pattern
2. **NOVELTY** — New information triggers dopamine
3. **RELEVANCE** — Personal connection activates attention

### The 15 Scroll-Stopper Conversion Blocks

1. "The one [thing] killing your [outcome]"
2. "Why [common advice] makes [problem] worse"
3. "[Institution] engineers/researchers found..."
4. "Do this [timeframe] trick before [activity]"
5. "If you have [symptom], then read this"
6. "[Specific decimal outcome] in [timeframe]"
7. "Why [number] [people/profession] use this"
8. "The [adjective] [noun] that fixes [problem]"
9. "My [authority] laughed at me, but then..."
10. "This [content] will be taken down in [time]"
11. "Are you making this [adjective] mistake?"
12. [Visual proof — product working]
13. "Stop using [popular product]. Use this instead"
14. "In [Year], this will be the new standard"
15. "What [authority] isn't telling you"

### Ad Copy Structure

- **Line 1-2 (Hook):** ONLY guaranteed read. Must hit 2+ Salience triggers.
- **Lines 3-7 (Bridge):** Earns click on "See More." Qualifies reader, one emotional escalation.
- **Lines 8-15 (Body):** Problem/mechanism tease, one proof point, desire building.
- **Closing line (CTA):** Single action verb, reduce friction. "See if this works for you →" not "Buy Now."

### Awareness-to-Ad Routing

| Awareness | Ad Focus |
|-----------|----------|
| L1 (Most Aware) | Offer/deal + product name + urgency/price |
| L2 (Product-Aware) | New proof / superiority |
| L3 (Solution-Aware) | Mechanism differentiation |
| L4 (Problem-Aware) | Problem / root cause |
| L5 (Completely Unaware) | Story / identity entry |

### Mechanism Naming System (4 Formulas)

1. **Medical-Sounding Condition:** `[System] [Clinical Event]` — "Hemostatic Failure," "Supply Disorganization Delay"
2. **Vivid Action Name:** `[What the problem DOES, personified]` — "The Freeze," "Kit Chaos"
3. **Discovery Method Name:** `The [Adjective] [Origin] Method` — "Color-Coded Triage," "72-Hour System"
4. **Numerical Superiority:** `[Number]x / [quantity] more than [competitor]` — "250 components vs 50-80"

---

## 11. Format: Video Sales Letters (VSLs)

**Source file:** `formats/titan-vsl.md`

### The UMP/UMS Engine

- **UMP (Unique Mechanism of Problem):** The ROOT CAUSE nobody's addressing
- **UMS (Unique Mechanism of Solution):** How your product solves that specific root cause

**SurviveX Example:**
- UMP: "The Freeze" — disorganization under pressure causes a 47-second delay
- UMS: "Organization Under Pressure" — color-coded triage system eliminates fumbling

### The 9-Section Frankenstein Structure

| Section | Purpose | Neurochemistry |
|---------|---------|---------------|
| 1. Hook | Stop, qualify, open loop | Cortisol spike |
| 2. Lead | Meet beliefs, pivot to new frame | Building |
| 3. UMP | Root cause reveal | Dopamine ("Ah-ha!") |
| 4. Rock Bottom | Shared vulnerability | Oxytocin peak |
| 5. Discovery | Inflection point | Dopamine ("There IS a way") |
| 6. UMS | Solution mechanism | Dopamine + trust |
| 7. Skeptic/Complication | Something almost went wrong | Fractionation DOWN |
| 8. Social Proof | Testimonials | Oxytocin + trust |
| 9. Offer & Close | Value stack + Crossroads | Decision moment |

### The 5 Hook Formulas

1. **Blunt Humiliation:** "People open their kit and realize..."
2. **Myth-Bust:** "Everything you've been told about [topic] is wrong"
3. **Rock Bottom:** "It was [specific time] when..."
4. **Pain Dimensionalization:** "Not just [basic problem] but [deeper problem]"
5. **Identity Hook:** "You didn't fail. Your [external factor] failed you"

### The Crossroads Close

Present three paths:
1. **Do nothing** → consequences (inaction cost)
2. **Try another solution** → limitations (competitor weakness)
3. **Buy from us** → transformation (the obvious choice)

### Video Length Intelligence

- **99.5% of winning Facebook/Instagram video ads are under 1 minute**
- Long-form VSLs belong on YouTube and landing pages
- **Dual-Hook Standard:** Hook A (story/cold) + Hook B (direct/warm) from same shoot
- **Re-hook rule:** For 60s+ video, attention resets every 15-20 seconds

---

## 12. Format: Native Story VSLs (Roosevelt Format)

**Source file:** `formats/titan-story-vsl.md`

### The 5 Invariable Bones

```
1. HISTORICAL HOOK     → Person + one extraordinary, specific fact
2. PROOF               → Why we believe them (earns the pivot)
3. PIVOT               → "But here's the part nobody talks about"
4. THE THING REMOVED   → What they had → how modern life stripped it
5. RESTORATION + CTA   → Product gives it back, risk-free
```

### Key Principle

The viewer enters **learning mode**, not ad-defense mode. They don't know it's an ad until Bone 5.

### SurviveX Story Bank (7 Stories)

1. Florence Nightingale (organized supplies → reduced deaths from 42% to 2%)
2. WWII Battlefield Medics (organized trauma kits, 90% survival)
3. Clara Barton / Red Cross (standardized emergency supply kits)
4. Wilderness SAR Teams (organized compact kits survive 72+ hours)
5. EMT-Paramedic Training (organize your bag or people die)
6. Israeli Defense Forces (developed Israeli bandage — military trauma care)
7. Apollo 13 Mission (NASA's labeled, organized emergency kit saved 3 astronauts)

### Story Selection Criteria (Must Hit All 3)

1. **Extraordinary performance** — Measurable, impressive
2. **Natural bridge to product** — Logically connects
3. **Something was removed** — Modern life stripped it away

### Length Variations

- **3-minute (~440 words):** All 5 bones fully developed
- **1-minute (~130 words):** Cut Bone 2, compress Bone 4
- **45-second (~95 words):** Same as 60-sec, tighten Bone 5

**Master → Cut Workflow:** Write 3-minute first. Everything else is cut from it.

---

## 13. Format: Landing Pages / Sales Pages

**Source file:** `formats/titan-landing-page.md`

### Message Match Imperative

The first thing the reader sees MUST mirror the last thing they saw before clicking. Mismatch = 200% conversion loss.

### The 6 Core Conversion Blocks (In Order)

**1. HERO SECTION** (Above fold)
- Hero Headline (restate promise in avatar's language)
- Subheadline (UMS in plain language)
- Hero Image (product or avatar shot)
- Bullet Promise Block (3-5 outcomes with timelines)
- Primary CTA Button ("Yes — I want [outcome]" not "Submit")
- Trust signals (star rating, verified buyer count, guarantee badge)

**2. UMP BLOCK** (Problem + Root Cause)
- Agitation opener (worst scenario)
- Why everything else failed (Concentration)
- Root cause reveal
- Mechanism metaphor

**3. UMS BLOCK** (Solution + Product)
- Pivot line ("So what does fix this?")
- UMS reveal
- Product introduction
- Mechanism deep-dive (3-5 specific elements)

**4. PROOF BLOCK** (Social Proof + Authority)
- Star rating + review count
- 3-5 avatar testimonials
- Authority testimonial (Chase Carter, EMT-P)
- Timeline visualization

**5. OFFER BLOCK** (Value Stack + Pricing)
- Price anchor (against expensive alternative: ER visit = $2,200)
- Cost reframe ("$120.99 = less than a single ER co-pay")
- Bonus stack with individual values
- Product tiers with "Best Value" badge

**6. CLOSE + RISK REVERSAL**
- Named guarantee ("The Preparedness Promise")
- Scarcity/urgency (tied to real constraint)
- Final CTA
- FAQ block (5-7 common objections)

### The 15-Bias Deployment Matrix

Each bias maps to a specific landing page section. See the format file for the complete matrix showing all 15 biases, their deployment locations, and implementation examples.

### CTA Engineering Rules

- Use first-person: "Yes — I Want to Protect My Family" not "Get It Now"
- State benefit NOT action: "Get My SurviveX Kit" not "Proceed to Checkout"
- Low commitment: "Try It Risk Free For 30 Days" not "Buy Now"

---

## 14. Format: Listicles / Pre-Sale Pages

**Source file:** `formats/titan-listicle.md`

### Key Distinction from Advertorial

| Aspect | Listicle | Advertorial |
|--------|----------|-------------|
| Format | Numbered list | Narrative article |
| Voice | Direct / editorial review | Independent journalism |
| Offer language | Editorial CTA okay | Subtle / implied only |
| Hard urgency | Soft only | None |

### The Full Conversion Arc

1. **HERO SECTION** — Master Headline: `[Number] [Frame] That [Outcome] [Qualifier]`
2. **COMPARISON TABLE** — Concentration move (destroys alternatives before reasons begin)
3. **THE REASONS BLOCK** (1-10 structured reasons, each with Hook → Mechanism → Proof → Transition)
4. **TESTIMONIAL DEPLOYMENT** — After Reasons 3, 7, and 10
5. **CTA BLOCK** — Mid-page + post-list
6. **FINAL CLOSE** — Commitment/Consistency

### 10-Reason Distribution

- Reasons 1-2: Problem/Mechanism (highest agitation)
- Reasons 3-4: Mechanism/Solution (dopamine escalation)
- Reasons 5-6: Social Proof/Authority (trust building)
- Reasons 7-8: Comparison/Concentration
- Reason 9: Fear/Urgency (loss aversion)
- Reason 10: Commitment/Consistency Close

---

## 15. Format: Advertorials / Native Ads

**Source file:** `formats/titan-advertorial.md`

### The Camouflage Principle

Must BE the medium it appears in, not just pretend. Voice matches publication, structure matches editorial, product appears as LOGICAL CONCLUSION of reporting.

### The 3 Mood-Borrowing Methods

1. **Direct Institutionalization** — Borrow prestige of established institutions
2. **Editorial Voice Mirroring** — Write in the register of the publication
3. **Balanced Reporting Camouflage** — Include token contrary perspective

### The 7-Block Editorial Blueprint

1. **HEADLINE** — Discovery/Finding/Investigation/Expert Take/Trend Story format
2. **LEAD PARAGRAPH** — [Scale of problem] + [Conventional wisdom] + [Why it's being challenged]
3. **PROBLEM REPORTING** — UMP framed as discovered problem in research
4. **THE DISCOVERY** — Product presented as logical outcome of reporting
5. **SOCIAL PROOF + AUTHORITY** — Doctor/practitioner quotes, consumer stories
6. **BALANCED PERSPECTIVE** — Acknowledge alternatives, immediately counter
7. **EDITORIAL CTA** — "For those interested in learning more..."

**Agitation Dial:** 3-5 out of 10 (save 8-10 for listicles and VSLs).

---

## 16. Format: Email Sequences

**Source file:** `formats/titan-email.md`

### 5 Subject Line Formulas

1. **Specific Curiosity Gap:** "Why your first aid kit will fail you in an emergency"
2. **Named Fear:** "What happens when your kid gets hurt and you freeze"
3. **Counterintuitive Claim:** "Stop buying first aid kits (read before you restock)"
4. **Direct Benefit + Timeframe:** "Find any supply in under 10 seconds (here's how)"
5. **Story Hook:** "He almost returned the kit. Then his son fell off the bike."

### 5 Email Formats

1. **Story Email** — Opening → Tension → Pivot → Lesson → CTA
2. **Authority Email** — Research opener → Problem → Mechanism → Bridge → CTA
3. **Proof Email** — Result headline → 3 testimonials → Pattern → Urgency → CTA
4. **Direct Offer Email** — Offer immediately → Reason → Deal stacked → Urgency → CTA×2
5. **Win-Back Email** — Acknowledge gap → What's changed → Objection handling → CTA

### The 5-Email Post-Purchase Sequence

| # | Timing | Type | Goal |
|---|--------|------|------|
| 1 | Immediately | Welcome + What's Next | Kill buyer's remorse |
| 2 | Day 2 | Mechanism Education | Explain WHY before they doubt |
| 3 | Day 7 | Story (early results) | Address "was this the right choice?" |
| 4 | Day 14 | Social Proof | Reinforce, build excitement |
| 5 | Day 25-28 | Reorder + Urgency | Trigger reorder/referral |

### Abandoned Cart Sequence (3 Emails)

1. **1 hour:** "You left something behind" (technical issue assumption)
2. **24 hours:** "Common question before ordering SurviveX" (address objections)
3. **48 hours:** "Last chance (we mean it)" (real scarcity/deadline)

---

## 17. Format: Quiz Funnels

**Source file:** `formats/titan-quiz-funnel.md`

### The 3 Psychological Jobs

1. **Pre-Qualification** — Self-selects problem-aware buyers
2. **Micro-Commitment Building** — Each question = small yes
3. **Personalization Illusion** — Results feel bespoke

### 5-Step Question Architecture

| Q# | Type | Example |
|----|------|---------|
| 1 | Identity/Goal | "What's your #1 reason for wanting a better first aid kit?" |
| 2 | Current State | "How prepared do you feel for a household emergency?" |
| 3 | Desire Activation (image-based) | "Choose the image that represents how you want to feel" |
| 4 | Commitment Sizing | "How many people live in your household?" |
| 5 | Email Capture | "Where should we send your personalized plan?" |

**Email capture timing:** ALWAYS after Q3-4. Never before Q3.

### The Scoring System

**Range rule:** Always score 40-68:
- Below 40 = feels hopeless → resistance
- Above 68 = feels fine → no urgency
- **40-68 = urgent but improveable → optimal conversion**

### Result Page Formula (6 Blocks)

1. Personalized headline
2. Score reveal + interpretation
3. Recommendation matched to answers
4. Product as expert recommendation
5. Social proof (profile-matched)
6. CTA

---

## 18. Compliance Framework (Tier 1/Tier 2)

**Source file:** `references/titan-words-forbidden.md`

### The Two-Tier Risk System

Two separate risk systems govern first aid product advertising:

- **FTC/FDA RISK:** Regulatory grey area. Could trigger warning letter.
- **META BAN RISK:** Automated bot flags. Ad rejected in minutes. Account disabled.

**Strategy:** Avoid Tier 1 (instant bans). Embrace Tier 2 (regulatory grey area) with Shields.

### Tier 1 — Death Zone (NEVER USE)

| Trigger | Why It Kills |
|---------|-------------|
| "Replaces professional medical care" | Implies product substitutes for emergency services |
| "Guaranteed to save lives" | Unsubstantiated absolute claim |
| "Medical device" (unless FDA registered) | Regulatory classification violation |
| "FDA approved" (unless true) | False regulatory claim |
| "Prevents death" | Absolute life/death claim |
| "Treats injuries" / "Treats wounds" | Medical treatment claim |
| "Cures" / "Treats" / "Prevents disease" | Medical claim |
| "YOU + Negative Attribute" | Personal Attributes Policy violation |

### Tier 2 — Profit Zone (Use With Shields)

**Approved First Aid Terms:** Emergency-ready, Life-saving, Professional-grade, Hospital-quality, Trauma care, Stops bleeding, Medical-grade, EMT-designed, Paramedic-grade

**Approved Action Verbs:** Helps manage, Designed to assist, Supports wound care, Helps control bleeding, Aids in stabilization, Equipped for, Prepared for

### The 6 Shield Protocols

Required whenever using any Tier 2 term:

| Shield | Method |
|--------|--------|
| **1: Qualifier Shield** | Add qualifying language: "Designed to help manage minor wounds*" |
| **2: Professional Care Disclaimer** | "Not a substitute for professional medical care. For serious injuries, always call 911." |
| **3: Testimonial Disclaimer** | "Results based on individual experiences and may not reflect typical experience." |
| **4: Testimonial Loophole** | Put specific scenarios INSIDE testimonials attributed to real, named customers |
| **5: Expert Citation Shield** | Professional credentials cited as expertise context, NOT performance guarantees |
| **6: Preparedness Story Defense** | Emergency scenarios appear as PROBLEMS in narrative, not product guarantee claims |

### The Personal Attributes Trap

**Rule:** Shift from second-person accusation to third-person observation.

| Bad (BANNED) | Good (APPROVED) |
|---|---|
| "Are you unprepared for emergencies?" | "Many families realize they're unprepared only when an emergency happens..." |
| "Your first aid kit is useless" | "Most families don't realize their kit is missing critical supplies..." |

### The Titan Thesaurus (3-Column Word Swaps)

Provides exact replacement patterns: Bot Trigger (never use) → White Hat (safe but weak) → Titan Swap (strong AND compliant).

**Example:**
| Bot Trigger | White Hat | Titan Swap |
|---|---|---|
| Treats wounds | Supports wound care | Includes supplies designed to help manage minor wounds* |
| Saves lives (absolute) | May help | 200,000+ families trust SurviveX to be ready when it matters most* |

---

## 19. The Hook Library & Video Hooks

**Source files:** `references/titan-hook-library.md`, `references/titan-video-hooks.md`

### 21 Hook Types (from 6,812 DTC ads)

1. Contrarian, 2. Weekly Timeline, 3. Direct Problem Callout, 4. First-Person Story, 5. Institution/Injustice, 6. Quote Lead, 7. Science Myth-Bust, 8. Offer-First, 9. Personal Test, 10. Benefit Stack, 11. Avatar Callout, 12. Discovery, 13. Social Proof Scale, 14. Comparison, 15. Win-Back, 16. Curiosity Question, 17. Warning, 18. Group Mirror, 19. Authority Discovery, 20. Regret Prevention, 21. Humor

### Hook Longevity Rankings

| Hook Type | Avg Days Active |
|-----------|----------------|
| Did You Know / Discovery | **428 days** (HIGHEST) |
| Direct Problem Callout | 335 days |
| Contrarian / Pattern Interrupt | 328 days |
| Authority Discovery | **1,580 days** (LONGEST single ad) |

### Video Hook Alignment Rule (3-Part)

Every video hook must align across three channels simultaneously:
- **Visual** — What the viewer sees
- **Spoken** — What the narrator says
- **Text** — What appears on screen

### Story VSL Source Types

- **Historical Figure** — Florence Nightingale, Clara Barton, Henry Dakin
- **Animal Biology** — Wound care instincts, survival behaviors
- **Scientific Discovery** — Antiseptic discovery, hemostasis, wound closure
- **Cultural Practice** — Roman military first aid, indigenous wound care
- **Statistical** — Data-driven hooks

---

## 20. The Swipe File

**Source file:** `references/titan-swipe-file.md`

Verbatim high-converting copy blocks organized into 6 categories:

1. **Opening Hooks** — Emergency preparedness scenarios
2. **Mechanism Metaphors** — Junk drawer analogy, fire extinguisher comparison, EMT jump bag story
3. **Problem Agitation** — Expired supplies, filler kits, helpless parent scenario
4. **Future Pacing** — Confident responder, peace of mind, Protector identity
5. **Value & Scarcity** — Cost-per-component ($0.48), FSA/HSA unlock, supply chain scarcity
6. **Risk Reversal** — 30-day guarantee, free shipping stack, identity close

Each block is annotated with the psychological pattern it demonstrates.

---

## 21. SurviveX Product Knowledge

**Source file:** `references/survivex-products.md`

### Product Lineup

| Product | Price | Components | Key Feature |
|---------|-------|-----------|-------------|
| Large First Aid Kit (BESTSELLER) | $120.99 | 250 | Tri-fold, 900D polyester, MOLLE |
| Large Pro | $150.99 | 270 | Quad-fold, 1200D, Israeli bandage, burn dressings |
| Large Waterproof | $150.99 | ~250 | IPX7, 600D TPU, marine/water sports |
| Small (Travel/Compact) | $54.99 | ~150 | Compact, glove box/daypack |
| Zip Stitch Wound Closure Kit | $29.99 | — | UNIQUE differentiator, field-grade wound closure |
| Travel Medicine Kit | $29.99 | 12 OTC meds | TSA-friendly |
| Israeli Bandages 2-Pack | $9.99 | — | Military-grade compression |
| Burn Dressing Kit | $24.99 | — | Hydrogel + non-adherent pads |

### Brand Voice

- Calm, confident, direct — like a friend who happens to be an EMT
- Never fear-mongering — sell preparedness, not panic
- Never tactical bro culture
- Organization is the hero
- Zip Stitch is the secret weapon
- Chase Carter, EMT-P is founder credibility

### Current Offers

- Free shipping on orders $75+
- FSA/HSA eligible
- 30-day satisfaction guarantee

---

## 22. SurviveX Multi-Page Strategy

**Source file:** `references/survivex-multi-page-strategy.md`

7 landing pages targeting different use cases:

| Page | Target Segment | Register |
|------|---------------|----------|
| Family Home Safety | Parents, households | R5 Aspirational Protector |
| Vehicle Emergency Preparedness | Vehicle owners, commuters | R8 Practical Provider |
| Outdoor/Hiking First Aid | Hikers, campers, backpackers | R5 Aspirational Protector |
| SurviveX vs MyMedic | Comparison shoppers | R1 Clinical Authority |
| Workplace Safety/OSHA Compliance | Safety officers, HR | R1 Clinical Authority |
| Travel First Aid | Travelers, vacationers | R4 Educational Guide |
| Trauma/Emergency Response | Preppers, safety-conscious | R3 Direct Commander |

Each page has its own headline template, emotional architecture, awareness level, sophistication stage, and ad congruence map with 3 hooks.

---

## 23. Design System (Titan Conversion Designer)

**Source files:** `design/titan-conversion-designer/SKILL.md`, `visual-patterns.md`, `design-psychology.md`, `copy-on-image.md`, `copy-design-workflow.md`, `fotw-design-patterns.md`

### When to Load

ONLY when producing visual ad assets (images/composites/design briefs). Do NOT load for copywriting tasks.

### The 5-Phase Workflow

```
PHASE 1 — COPY ANALYSIS      → Awareness level, bias, hook, copy text
PHASE 2 — DESIGN BRIEF       → Pattern, layout, color, reference images
PHASE 3 — GENERATION          → Base ad image (no text) via Gemini
PHASE 4 — COMPOSITE           → Final ad with text overlays
PHASE 5 — QA                  → Verified, production-ready ad
```

### 26 Visual Patterns

The system includes 26 classified DTC ad creative patterns derived from 248 reference ads across 84 brands. Each pattern specifies:

- Visual layout and composition
- Color palette and psychology
- Face/person rules
- Typography specifications
- Psychological driver
- When to use / when NOT to use
- Gemini prompt template for image generation

Key patterns include: Benefit-Stack + Price Strike, Before/After, Social Proof Number, Press Endorsement, Product Hero + Testimonial, Scientific Study, Multi-Benefit Grid, Founder Story, and more.

### Design Brief Format

Every visual asset starts with a structured Design Brief containing: Copy Signal (awareness, sophistication, bias, hook), Layout Decision (pattern + rationale), Color Palette (with psychology reason), Visual Hierarchy, Face/Person requirements, Product Placement, CTA Button specs, Reference Images, and Gemini Prompt.

---

## 24. Production Pipelines

**Source files:** `production/vsl-production.md`, `production/copy-production.md`, `production/copy-audit.md`

### VSL Production Pipeline (15 Phases)

Automated pipeline from intake to final video: Intake → Research → Script → Images → Video → Voiceover → Sound Design → Assembly → Post-production. Includes Ralph Loop checkpoints for crash recovery and parallel agent work.

### Copy Production Pipeline

7-step process: Pre-write Planning → Drafting → Schwartz Application → NLP Integration → Compliance Check → Quality Gate Review → Final Output with metadata.

### Copy Audit Framework

For REWRITING existing copy against Titan standards. Not for verification (which is read-only) — audit actively fixes issues. Includes a specialized First Aid / Safety Product Compliance section with 8 checks.

---

## 25. Verification System (titan-verify)

**Source file:** `production/titan-verify.md`

### Purpose

Post-production auditor that verifies Titan techniques were actually deployed. **If the copy could have been written without Titan, it FAILS.**

### The 8 Verification Sections

1. **Strategic Foundation** (3 checks) — Awareness level, sophistication stage, neurochemical driver
2. **Psychology Deployment** (4 checks) — Minimum 5 biases, Triune Brain sequence, fractionation, Zeigarnik loops
3. **Hooks & Headlines** (3-4 checks) — Hook type from 21, I=B+C formula, 2+ Schwartz Strengtheners
4. **Structure Adherence** — Format blueprint followed exactly
5. **Language Quality** (4 checks) — 3+ NLP patterns, zero Copy Killers, consistent register, specificity
6. **Compliance** (5 checks) — Zero Tier 1, shielded Tier 2, no Personal Attributes, disclaimers present
7. **Cross-Format Techniques** (4 checks, min 2) — Open loops, mechanism naming, future pacing, concentration
8. **Delivery Metadata** — All strategic data documented

### Verdict Logic

- **PASS:** All Sections 1-6 checkboxes + 5+ biases + 3+ NLP patterns + 2+ cross-format techniques
- **CONDITIONAL PASS:** All pass but marginal (exactly 5 biases, exactly 3 NLP)
- **FAIL:** Any checkbox unanswered, compliance violation, below minimums, or could have been written without Titan

---

## 26. Video Analyzer

**Source file:** `titan-dr-share/copywriting/titan-video-analyzer/SKILL.md`

### Purpose

Reverse-engineers competitor/reference video ads into Titan components. NOT for writing — purely analytical.

### Prerequisites

Run `video-to-context.py` to extract frames + transcript, then load Titan DR files for vocabulary.

### The 8 Analysis Sections

1. **Strategic Assessment** — Awareness level, sophistication stage, avatar
2. **Hook Deconstruction** — Hook type, 3-part alignment (Visual + Spoken + Text)
3. **Bias Audit** — Walk 28-bias checklist, map to timestamps
4. **Structure Analysis** — Triune Brain sequence, neurochemical arc, body structure
5. **Language & Copy Analysis** — NLP patterns, Copy Killers, Schwartz Strengtheners, register
6. **Visual Technique Analysis** — Caption style, color psychology, product reveal timing
7. **Compliance Check** — Tier 1/2 violations, Personal Attributes, platform risk
8. **Summary Card** — Machine-readable output with strategic data + verdict

---

## 27. Quick-Start Examples

### Example 1: Write a Facebook Ad for SurviveX Large Kit

**Load:** Core 3 + `titan-facebook-ads.md` + `titan-hook-library.md` + `survivex-products.md`

**Strategic Assessment:**
```
Awareness: L3 (Solution-Aware — knows first aid kits exist, doesn't know SurviveX)
Sophistication: S3 (Feature fatigue — all kits claim "comprehensive")
UMP: "The Freeze" — disorganization under pressure
UMS: "Organization Under Pressure" — color-coded triage system
Register: R5 (Aspirational Protector)
Biases: Loss Aversion, Specificity, Social Proof, Authority, Curiosity Gap, Contrast
```

**Output:** Hook + Bridge + Body + CTA following ad copy structure, with compliance check.

### Example 2: Write a 5-Email Post-Purchase Sequence

**Load:** Core 3 + `titan-email.md` + `survivex-products.md`

Follow the 5-email sequence template (Welcome → Education → Story → Social Proof → Reorder), using SurviveX product specs for content.

### Example 3: Write a Native Story VSL

**Load:** Core 3 + `titan-story-vsl.md` + `titan-video-hooks.md` + `titan-hook-library.md` + `core/titan-storytelling.md`

Select a story from the SurviveX Story Bank (e.g., Florence Nightingale), follow the 5-Bone structure, deliver both Hook A (story) and Hook B (direct) versions.

### Example 4: Audit Existing Copy

**Load:** Core 3 + relevant format file + `titan-verify.md`

Run through all 8 verification sections, output verdict (PASS/CONDITIONAL/FAIL) with specific findings.

---

## 28. Appendix: Complete File Checklist

### Core Files (3) — Always Load
- [ ] `core/titan-psychology.md`
- [ ] `core/titan-language.md`
- [ ] `references/titan-words-forbidden.md`

### Format Files (8) — Load Per Task
- [ ] `formats/titan-facebook-ads.md`
- [ ] `formats/titan-vsl.md`
- [ ] `formats/titan-story-vsl.md`
- [ ] `formats/titan-advertorial.md`
- [ ] `formats/titan-landing-page.md`
- [ ] `formats/titan-email.md`
- [ ] `formats/titan-listicle.md`
- [ ] `formats/titan-quiz-funnel.md`

### Reference Files (10) — Load As Needed
- [ ] `references/titan-words-approved.md`
- [ ] `references/titan-hook-library.md`
- [ ] `references/titan-video-hooks.md`
- [ ] `references/titan-swipe-file.md`
- [ ] `references/survivex-products.md`
- [ ] `references/survivex-multi-page-strategy.md`
- [ ] `core/titan-storytelling.md`
- [ ] `references/dr-copy-examples.md` (legacy v1)
- [ ] `references/dr-visual.md`
- [ ] `references/titan-expert-panel.md` (RETIRED)

### Design Files (7) — Load for Visual Tasks
- [ ] `design/titan-conversion-designer/SKILL.md`
- [ ] `design/titan-conversion-designer/visual-patterns.md`
- [ ] `design/titan-conversion-designer/design-psychology.md`
- [ ] `design/titan-conversion-designer/copy-on-image.md`
- [ ] `design/titan-conversion-designer/copy-design-workflow.md`
- [ ] `design/titan-conversion-designer/fotw-design-patterns.md`
- [ ] `design/titan-conversion-designer/references/gemini-multimodal.md`

### Production Files (4) — Load for Production/QA
- [ ] `production/vsl-production.md`
- [ ] `production/copy-production.md`
- [ ] `production/copy-audit.md`
- [ ] `production/titan-verify.md`

### Analysis Files (1)
- [ ] `copywriting/titan-video-analyzer/SKILL.md`

---

*Manual generated from complete system analysis. For the latest version, always refer to the source files in the Titan-DR-System directory.*
