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
- **Examples**: "FREE SHIPPING ON $75+", "250 Components. Color-Coded. EMT-Designed."

### Tier 3: BODY TEXT / BULLETS (Optional — only for text-heavy patterns)
- **Length**: Up to 300 words (Pattern 5: Text-Heavy Card only)
- **Style**: Regular weight, centered, 16-18pt
- **Placement**: Below headline, fill the card

---

## Headline Formulas (From Winning Ads)

### Formula 1: Provocative Statement
> `[PROVOCATIVE CLAIM ABOUT THEIR CURRENT SOLUTION]`
- "YOUR FIRST AID KIT IS A BOX OF FALSE CONFIDENCE"
- "MY KID WAS BLEEDING AND I FROZE."
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
> `COLOR-CODED COMPARTMENTS. ORGANIZED. LIFE-SAVING. [BRAND].`
- Bottom of image, after mechanism explanation
- Concludes the education with brand positioning

---

## Color Rules (From 100 Analyzed Images)

### Background Colors That Win
| Color | Hex | Used By | Best For |
|-------|-----|---------|----------|
| Deep Navy | #1A1F3D | SurviveX | Tactical, trust |
| Navy/Indigo | #1E1B4B | SurviveX Pro | Story cards, trust |
| Pure Black | #1A1A1A | SurviveX Dark Mode | Urgency, premium |
| Warm Cream | #F5F0EB | SurviveX Travel | Clean, approachable |
| White | #FFFFFF | SurviveX Educational | Illustration, mechanism |
| Safety Orange Gradient | #1A0E00→#FF6B00 | SurviveX | Premium comparison |
| Light Gray | #F3F4F6 | SurviveX | Product + review |

### Text Colors
- **On dark backgrounds**: White (#FFFFFF) for headlines, #E5E5E5 for body
- **On light backgrounds**: Black (#1A1A1A) for headlines, #4A4A4A for body
- **Accent/offer text**: Orange (#FF6B00), Yellow (#FFD700), Red (#FF0000), Brand color

### Offer Strip Colors
- **Red bar + white text**: Most common (SurviveX, safety/preparedness brands)
- **Orange badge**: SurviveX (FREE SHIPPING)
- **Dark background + white text**: SurviveX, SurviveX Pro

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

## Meta Ad Policy Quick Reference (First Aid / Safety Ads)

### Allowed
- "Designed by an EMT-Paramedic"
- "250 expert-selected components"
- Star ratings and real customer quotes
- Before/after for organization (messy kit vs organized kit)
- Lifestyle imagery showing preparedness and confidence

### Not Allowed
- Medical treatment claims ("treats wounds", "prevents infection")
- Graphic injury imagery (excessive blood, open wounds)
- Fear-mongering targeting parents ("Your child could die")
- "You" + negative state combo ("You're putting your family at risk")
- Fake UI elements that trick users into clicking

### Safe Patterns
- Third-person: "She had the wound closed in under 60 seconds"
- Mechanism: "Color-coded compartments reduce retrieval time to under 10 seconds"
- Question: "What if your first aid kit had a system instead of a pile of supplies?"
- Social proof: "200,000+ families made the switch"
