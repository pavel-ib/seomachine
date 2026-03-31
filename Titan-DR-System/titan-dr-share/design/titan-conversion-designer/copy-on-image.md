# Titan Ads — Copy-on-Image Rules

> How to place text on ad images for maximum impact. Rules extracted from 509 winning image ads.

---

## The 3 Text Tiers

Every ad image has at most 3 tiers of text. Most winning ads use only 1-2.

### Tier 1: HEADLINE (Required for text-on-image ads)
- **Length**: 3-8 words
- **Style**: Bold, ALL CAPS or Title Case, largest text on image
- **Placement**: Top 1/3 of image (above product) or center
- **Color**: White on dark, Black on light — NEVER low contrast
- **Font**: Bold sans-serif. Montserrat Black, Inter Bold, Impact, or brand font

### Tier 2: SUBHEAD / OFFER (Optional)
- **Length**: 8-15 words
- **Style**: Smaller than headline, may use accent color
- **Placement**: Below headline or in offer strip at bottom
- **Examples**: "70% OFF TODAY ONLY", "Rewind the Clock with E27 Liquid Collagen"

### Tier 3: BODY TEXT / BULLETS (Optional — only for text-heavy patterns)
- **Length**: Up to 300 words (Pattern 5: Text-Heavy Card only)
- **Style**: Regular weight, centered, 16-18pt
- **Placement**: Below headline, fill the card

---

## Headline Formulas (From Winning Ads)

### Formula 1: Provocative Statement
> `[PROVOCATIVE CLAIM ABOUT THEIR CURRENT SOLUTION]`
- "YOUR $30 FIRST AID KIT IS LITERALLY USELESS"
- "UNPREPARED IS UNACCEPTABLE."
- "WE'RE SAYING GOODBYE"

### Formula 2: "Don't Let X" / Challenge
> `Don't let [obstacle] be the excuse for [their goal]`
- "Don't let age be the excuse for your belly"

### Formula 3: Event + Offer
> `[EVENT] OFFER ENDS [TIMEFRAME]`
- "MEMORIAL OFFER ENDS TODAY"
- "This Black Friday — RejuvaKnee 60% off"

### Formula 4: Problem Hook + Cliffhanger
> `[Problem statement], but did you know... more`
- "Most People with Sleep Apnea don't use this to stop snoring, but did you know... more"
- The "...more" is intentional — mimics FB's truncation to create curiosity

### Formula 5: Apology / Behind-the-Scenes
> `WE OWE YOU AN APOLOGY`
- Works as headline for text-heavy story ads
- Creates curiosity through brand vulnerability

### Formula 6: Mechanism Reveal
> `COLOR-CODED COMPARTMENTS SAVE SECONDS. SURVIVEX SAVES LIVES.`
- Bottom of image, after mechanism explanation
- Concludes the education with brand positioning

---

## Color Rules (From 100 Analyzed Images)

### Background Colors That Win
| Color | Hex | Used By | Best For |
|-------|-----|---------|----------|
| Deep Purple | #2D1B4E | Premium safety brands | Premium, safety |
| Navy/Indigo | #1E1B4B | Tactical/trust brands | Story cards, trust |
| Pure Black | #1A1A1A | SurviveX, tactical brands | Urgency, premium |
| Warm Cream | #F5F0EB | Clean lifestyle brands | Clean, approachable |
| White | #FFFFFF | Medical/clinical brands | Cartoon/illustration |
| Dark Charcoal Gradient | #1A1A1A→#2D2D2D | SurviveX | Tactical premium |
| Light Gray | #F3F4F6 | Product review layouts | Product + review |

### Text Colors
- **On dark backgrounds**: White (#FFFFFF) for headlines, #E5E5E5 for body
- **On light backgrounds**: Black (#1A1A1A) for headlines, #4A4A4A for body
- **Accent/offer text**: Orange (#FF6B00), Yellow (#FFD700), Red (#FF0000), Brand color

### Offer Strip Colors
- **Red bar + white text**: Most common for urgency offers
- **Orange badge**: SurviveX ("FREE SHIPPING" / "LIFETIME WARRANTY")
- **Dark background + white text**: Tactical/premium brands

---

## Text Placement Rules

### Rule 1: Text and Product Don't Compete
The headline and product image should occupy different zones. Never overlay text on the product.

### Rule 2: The F-Pattern
Eye tracking: Top-left → across → down-left → across. Place headlines top, supporting text below.

### Rule 3: Bottom Strip = Offer Zone
The bottom 20-25% of the image is where offers, CTAs, and disclaimers live.

### Rule 4: One Message Per Ad
Don't try to communicate benefits AND offer AND social proof in one image. Pick one primary message:
- **Awareness**: Problem statement OR mechanism
- **Consideration**: Social proof OR comparison
- **Conversion**: Offer OR urgency

---

## Text Overlay Technical Specs

### For Gemini-Generated Images
Gemini's text-in-image rendering is unreliable. Always:
1. Generate the image WITHOUT text
2. Composite text using ImageMagick or HTML→screenshot

### ImageMagick Text Overlay Command
```bash
convert input.png \
  -gravity North \
  -font "Montserrat-Bold" \
  -pointsize 72 \
  -fill white \
  -stroke black -strokewidth 2 \
  -annotate +0+40 "HEADLINE TEXT" \
  output.png
```

### HTML→Screenshot Method (More Control)
```html
<div style="position:relative; width:1080px; height:1350px;">
  <img src="generated-image.png" style="width:100%; height:100%; object-fit:cover;">
  <div style="position:absolute; top:40px; left:40px; right:40px;
    font-family:'Montserrat',sans-serif; font-weight:900;
    font-size:64px; color:white; text-shadow:0 2px 8px rgba(0,0,0,0.5);">
    HEADLINE TEXT
  </div>
</div>
```
Then screenshot with Puppeteer: `npx puppeteer screenshot overlay.html --width=1080`

---

## Aspect Ratios

| Ratio | Pixels | Platform | Use Case |
|-------|--------|----------|----------|
| 4:5 | 1080×1350 | FB/IG Feed | Primary format for DTC |
| 1:1 | 1080×1080 | FB/IG Feed | Product hero, comparison |
| 9:16 | 1080×1920 | Stories/Reels | UGC, problem-state, full-screen |
| 16:9 | 1200×628 | FB Link Ads | Rarely used for DTC |

**Default**: 4:5 (1080×1350) — takes maximum feed real estate.

---

## Meta Ad Policy Quick Reference (First Aid / Safety Product Ads)

### Allowed
- "250 expert-curated components for any emergency"
- "Recommended by EMTs and first responders"
- Star ratings and real customer quotes
- Before/after comparisons of kit organization (generic vs SurviveX)
- Lifestyle imagery showing family preparedness scenarios

### Not Allowed
- Medical treatment claims ("treats wounds", "cures infections")
- Implying the kit replaces professional medical care
- Graphic injury imagery or excessive blood/trauma visuals
- "You" + fear-based shaming ("You're putting your family at risk")
- Fake UI elements that trick users into clicking
- Claims that the product provides medical-grade care without certification

### Safe Patterns
- Third-person: "He was ready when his family needed him most"
- Mechanism: "Color-coded compartments reduce search time to under 10 seconds"
- Question: "What if you had the right supplies organized and ready?"
- Social proof: "200,000+ kits trusted by families and first responders"

### First Aid Product Compliance Notes
- Always include disclaimer: "This product is a first aid kit, not a substitute for professional medical care"
- Do not claim FDA approval for the kit itself (individual components may be FDA-cleared)
- Avoid implying the kit can handle severe trauma without professional training
- "EMT-curated" is permissible when verifiable (Chase Carter EMT-P)
