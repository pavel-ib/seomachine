---
name: titan-verify
description: >
  Post-production Titan deployment verifier. Reads finished copy and audits
  whether Titan DR techniques were actually deployed. Outputs a structured
  PASS/FAIL verification report with line citations. Single-pass analysis —
  does NOT rewrite or optimize.
  Trigger: "verify copy," "titan verify," "deployment check," "check this copy."
  Do NOT trigger for writing new copy (use copy-production) or
  auditing + rewriting (use copy-audit).
---

# Titan Verify — Post-Production Copy Auditor

You are a copy auditor. Read the finished copy, verify Titan DR technique deployment, and output a structured verification report. You do NOT rewrite anything.

> **Core principle:** If the copy could have been written without Titan, it FAILS.

---

## STEP 1: GATHER INPUT

Accept copy in one of these forms:
1. **Pasted text** — user pastes copy directly into the conversation
2. **File path** — user provides a path (e.g., `vsl/slug/copy/script.md`), use `Read` to load it
3. **Content type** — user may specify; if not, auto-detect (see detection table below)

### Content Type Detection

| Signal | Content Type |
|--------|-------------|
| Timing markers `[00:00]`, word count 1500+, UMP/UMS sections | VSL |
| 5-bone structure, dual hooks, length cuts | Story-VSL (Roosevelt) |
| Under 500 words, CTA button text, no pricing in body | Facebook Ad |
| Hero section, pricing/offer stack, multiple CTAs, guarantee | Landing Page |
| Subject line, preheader, short body, single CTA | Email |
| Numbered reasons (5+), comparison table | Listicle |
| Editorial tone, 800-2000 words, delayed product mention | Advertorial |
| Question sequence, scoring, result page | Quiz Funnel |

---

## STEP 2: LOAD REFERENCE FILES

Read these Titan files for verification criteria:

**Always load (3 core):**
1. `skills/titan-dr/references/titan-deployment-checklist.md` — the master checklist
2. `skills/titan-dr/core/titan-psychology.md` — 28 biases (for Section 2)
3. `skills/titan-dr/core/titan-language.md` — NLP patterns, copy killers, voice registers (for Section 5)

**Always load (compliance):**
4. `skills/titan-dr/references/titan-words-forbidden.md` — Tier 1/2, Shield Protocols (for Section 6)

**Load based on content type (1 file):**
- VSL → `skills/titan-dr/formats/titan-vsl.md`
- Story-VSL → `skills/titan-dr/formats/titan-story-vsl.md`
- Facebook Ad → `skills/titan-dr/formats/titan-facebook-ads.md`
- Landing Page → `skills/titan-dr/formats/titan-landing-page.md`
- Email → `skills/titan-dr/formats/titan-email.md`
- Listicle → `skills/titan-dr/formats/titan-listicle.md`
- Advertorial → `skills/titan-dr/formats/titan-advertorial.md`
- Quiz Funnel → `skills/titan-dr/formats/titan-quiz-funnel.md`

**Optional (for hook verification):**
5. `skills/titan-dr/references/titan-hook-library.md` — 21 hook types (for Section 3)

---

## STEP 3: RUN THE 8-SECTION VERIFICATION

Work through the deployment checklist section by section. For EVERY item, provide a **specific citation** (exact quote from the copy). A vague "yes" = automatic FAIL.

### Sections:
1. **Strategic Foundation** — Schwartz awareness/sophistication levels, neurochemical driver mapping
2. **Psychology Deployment** — 5+ biases (of 28), triune brain sequence, fractionation, Zeigarnik loops
3. **Hooks & Headlines** — Hook type (of 21), I=B+C formula, Schwartz strengtheners (2+ of 13)
4. **Structure Adherence** — Format-specific blueprint (VSL structures, landing page blocks, etc.)
5. **Language Quality** — 3+ NLP patterns (of 25), zero copy killers (of 10), voice register, specificity
6. **Compliance** — Zero Tier 1, Tier 2 shielded, no YOU+negative, testimonial disclaimers, medical/safety disclaimers (no medical treatment claims for first aid products, "not a substitute for professional medical care" disclaimer where applicable)
7. **Cross-Format Techniques** — Open loops, mechanism naming, future pacing, concentration (2+ of 4)
8. **Delivery Metadata** — Complete all fields

---

## STEP 4: DETERMINE VERDICT

**PASS**: All checkboxes in Sections 1-6 answered with specific citations. Section 7 has at least 2 of 4 techniques. Section 8 complete. Minimum 5 biases, minimum 3 NLP patterns.

**CONDITIONAL PASS**: All sections pass but with marginal deployment (exactly 5 biases, exactly 3 NLP patterns, or only 2 cross-format techniques).

**FAIL**: Any checkbox unanswered, any citation missing, compliance violation, fewer than 5 biases, fewer than 3 NLP patterns, fewer than 2 cross-format techniques, or copy shows no visible Titan deployment.

---

## STEP 5: OUTPUT THE REPORT

Format the report as follows:

```markdown
# Titan Verification Report

**Content Type:** [type]
**Detection Method:** [auto-detected | user-specified]
**Date:** [YYYY-MM-DD]
**Verdict:** [PASS | FAIL | CONDITIONAL PASS]
**Score:** [X]/8 sections, [Y]/[Z] items

---

## 1. Strategic Foundation [PASS|FAIL]
[table of checks with citations]

## 2. Psychology Deployment [PASS|FAIL]
[bias table + checks with citations]

## 3. Hooks & Headlines [PASS|FAIL]
[checks with citations]

## 4. Structure Adherence [PASS|FAIL]
[format-specific checks with citations]

## 5. Language Quality [PASS|FAIL]
[NLP patterns table + copy killers scan + voice register + specificity]

## 6. Compliance [PASS|FAIL]
[Tier 1/2 scan + shields + personal attributes check]

## 7. Cross-Format Techniques [PASS|FAIL]
[4 technique checks]

## 8. Delivery Metadata
[all fields filled]

---

## Summary
**Strengths:** [bullet points]
**Gaps:** [bullet points]
**Verdict Rationale:** [1-2 sentences]
```

**IMPORTANT:** End every report with this machine-readable line for automated parsing:
```
<!-- VERDICT: PASS|FAIL|CONDITIONAL -->
```

---

## WHAT THIS COMMAND IS NOT

- **Not copy-audit** — copy-audit REWRITES copy; titan-verify only ANALYZES
- **Not copy-production** — copy-production WRITES new copy; titan-verify only READS
- **Not a multi-agent pipeline** — this is a single-pass, single-agent analysis
- **Not optional** — every copy output should be verified before delivery
