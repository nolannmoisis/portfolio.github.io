# Charte Graphique - Portfolio Nolann MOISIS

## 1. Palette de Couleurs

### **Couleurs principales**
- **Bleu foncé** `#0C3148` → Fond de la bio et accents.
- **Bleu profond** `#0D225E` → Barre supérieure et séparation.
- **Bleu clair** `#E3EAFC` → Fond général du site.
- **Blanc** `#EAF0FA` → Texte et éléments contrastés.

### **Utilisation des couleurs**
| Élément UI              | Couleur    |
|-------------------------|-----------|
| Fond principal         | `#E3EAFC`  |
| Titres et textes       | `#0C3148`  |
| Boutons et liens       | `#0D225E`  |
| Hover boutons          | `#3A4F7A`  |
| Fond des projets      | `#0C3148`  |
| Footer                | `#0D225E`  |

---

## 2. Typographie

### **Police principale : Poppins (Google Fonts)**
- **Moderne, épurée et lisible**.
- **Variantes utilisées** :
    - `Poppins Bold (700)` → Titres principaux.
    - `Poppins Regular (400)` → Textes généraux.
    - `Poppins Light (300)` → Sous-titres et textes secondaires.

### **Hiérarchie typographique**
| Élément        | Style            | Taille    |
|---------------|-----------------|-----------|
| Titre (h1)   | Poppins Bold     | 36px      |
| Titres h2-h3 | Poppins Semi-Bold | 28px - 22px |
| Texte normal | Poppins Regular  | 16px      |
| Boutons      | Poppins Bold     | 16px      |

---

## 3. Structure et Design

### **3.1 Disposition des Éléments**
- **Header** : Barre de navigation collée en haut avec un design épuré.
- **Section Profil** : Photo **ronde et centrée**, bio à droite dans une **boîte rectangulaire**.
- **Portfolio** : Grille de **cartes projet carrées**, **remplies d’images**, avec **overlay texte au survol**.
- **Contact** : Formulaire simple et clair.

### **3.2 Composants UI**
- **Effet au survol** sur les cartes projets avec un **zoom fluide**.
- **Transitions CSS** pour **adoucir les interactions**.
- **Boutons stylisés** en accord avec le design.

---

## 4. Responsive Design

### **Optimisation pour toutes les résolutions**
| Écran                 | Ajustements UI/UX |
|-----------------------|------------------|
| **Desktop (1024px +)** | Layout large avec espacements confortables. |
| **Tablette (768px - 1024px)** | Réduction des marges, cartes ajustées en 2 colonnes. |
| **Mobile (480px - 768px)** | Passage en **1 colonne**, images et textes adaptés. |

### **Adaptations spécifiques**
- **Utilisation de `grid-template-columns` dynamiques** pour adapter la grille des projets.
- **Flexbox pour centrer et aligner les éléments**.
- **Ajustement des tailles d’images en `%`** pour éviter les débordements.