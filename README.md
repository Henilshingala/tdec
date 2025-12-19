# TDEC (IT) Blog - Technology Blog Website

## 📋 Project Overview
**TDEC (IT) Blog** is a comprehensive **technology and IT blog website** showcasing various categories of content including classroom activities, technical visits, IT events, and technology galleries. This PHP-based dynamic website features a beautiful dark mode, animated elements, and a rich media gallery.

## 🛠️ Technology Stack
- **Backend**: PHP
- **Frontend**: HTML5, CSS3, JavaScript
- **Styling**: Inline CSS with advanced animations
- **Images**: Extensive image gallery (139 images)
- **Type**: Dynamic Web Application

## ✨ Key Features

### 1. **Dynamic Theme System**
- Light and dark mode toggle
- Smooth theme transitions
- User preference persistence
- Floating theme toggle button

### 2. **Content Categories**
- Classroom activities and events
- Technical visits and industrial tours
- IT department showcases
- Photo galleries
- Video content

### 3. **Rich Media Gallery**
- 139+ images organized by category
- Responsive grid layouts
- Hover effects and animations
- High-quality photography
- Video galleries with controls

### 4. **Advanced Animations**
- Floating elements
- Gradient animations
- Smooth scrolling
- Hover transformations
- fade-in effects
- Glassmorphism effects

### 5. **Interactive Elements**
- Video playback controls
- Image hover effects
- Category descriptions with animations
- Scroll-triggered animations
- Responsive navigation

## 📁 Project Structure
```
tdec-main/
├── index.php                    # Main page (53KB - extensive content)
│
└── images/                      # Image gallery folder
    ├── Classroom Photos
    ├── Visit Photos
    ├── Event Photos
    ├── Technical Images
    ├── Header Images
    └── [139 total images]
```

## 🚀 Getting Started

### Prerequisites
- PHP 7.4 or higher
- Web server (Apache, Nginx, or built-in PHP server)
- Modern web browser

### Running Locally

1. **Navigate to project**
   ```bash
   cd tdec-main/tdec-main
   ```

2. **Start PHP Server**
   ```bash
   php -S localhost:8000
   ```

3. **Access Website**
   ```
   Open browser: http://localhost:8000
   ```

### Deploying to Web Server

1. **Upload Files**
   - Upload `index.php` and `images/` folder
   - Maintain folder structure

2. **Configure Server**
   - Ensure PHP is enabled
   - Set proper file permissions
   - Configure .htaccess if needed

3. **Access Site**
   - Visit your domain URL

## 🎨 Design Features

### Visual Aesthetics

#### Header Section
- Full-width banner image
- Hover scale effect
- Responsive image sizing
- Professional branding

#### Welcome Text
- Large animated heading (3.5rem)
- Gradient text effect (yellow to orange)
- Floating animation
- Glowing underline with animation

#### Category Cards
- Glassmorphism design
- Backdrop blur effects
- Gradient overlays
- Hover transformations
- Scroll-triggered visibility

### Animation Effects

#### 1. **Floating Animation**
```css
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}
```

#### 2. **Gradient Movement**
```css
@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
```

#### 3. **Shine Effect**
```css
@keyframes shine {
    0% { background-position: 0% 0%; }
    100% { background-position: 200% 0%; }
}
```

#### 4. **Border Glow**
```css
@keyframes borderGlow {
    0%, 100% { box-shadow: 0 0 5px rgba(255, 204, 0, 0.2); }
    50% { box-shadow: 0 0 20px rgba(255, 204, 0, 0.4); }
}
```

## 📸 Gallery Features

### Image Gallery Types

#### 1. **Standard Gallery** (4:3 aspect ratio)
- Grid layout: `repeat(auto-fit, minmax(300px, 1fr))`
- Hover effects: Scale 1.02 and lift
- Image zoom on hover: Scale 1.15
- Border radius: 15px
- Professional shadows

#### 2. **Classroom Gallery** (1:1 square aspect ratio)
- Grid layout: `repeat(auto-fit, minmax(250px, 1fr))`
- Compact square images
- Perfect for group photos
- Border radius: 12px

#### 3. **Visit/Thumbnail Gallery**
- Similar to standard gallery
- Optimized for event photos
- Tour and visit documentation

### Video Features
- Custom video controls
- Vertical video support (9:16)
- Max-width: 800px
- Hover zoom effect
- Control hints overlay
- Responsive sizing

## 🎭 Dark Mode Implementation

### Theme Toggle
- Fixed position (bottom-left)
- Circular button (45px)
- Smooth transitions
- Icon rotation on toggle

### Dark Mode Styles
```css
body.dark-mode {
    background: #000000;
    color: #ffffff;
}
```

- Inverted color scheme
- Adjusted media backgrounds
- Modified footer styling
- Enhanced contrast

## 🗂️ Content Categories

Based on the code structure, the blog likely includes:

### 1. **Classroom Activities**
- Student activities
- Lab sessions
- Practical demonstrations
- Group projects
- Learning moments

### 2. **Technical Visits**
- Industry tours
- Company visits
- Technical exhibitions
- Conferences
- Workshops

### 3. **Department Events**
- Cultural events
- Technical festivals
- Competitions
- Celebrations
- Award ceremonies

### 4. **Gallery Sections**
- Photo documentation
- Event coverage
- Achievement showcases
- Team photos

## 📊 File Statistics
- **Main File**: index.php (1506 lines, 53KB)
- **Images**: 139 files
- **Total Content**: Dynamic PHP-driven
- **CSS**: Inline (~800+ lines of styles)
- **JavaScript**: Theme toggle functionality

## 🎯 Use Cases

### Educational:
- College IT department blog
- Technical education portal
- Student activity showcase
- Event documentation

### Professional:
- Corporate IT blog
- Technology news site
- Company activity showcase
- Team portfolio

## 🔧 Customization Guide

### Adding New Categories
```php
<div class="category">
    <h2>Your Category Name</h2>
    <div class="category-description visible">
        <p>Category description...</p>
    </div>
    <div class="gallery">
        <!-- Add images -->
    </div>
</div>
```

### Adding Images
```php
<div class="media">
    <img src="images/your-image.jpg" alt="Description">
</div>
```

### Adding Videos
```php
<div class="classroom-video">
    <video controls>
        <source src="images/your-video.mp4" type="video/mp4">
    </video>
    <div class="video-control">
        <span class="video-hint">Click to play</span>
    </div>
</div>
```

## 🌈 Color Scheme
- **Primary**: Gold/Yellow (#ffcc00)
- **Secondary**: Orange (#ff9900)
- **Dark Background**: Black (#000000)
- **Light Background**: White (#ffffff)
- **Text**: #333 (light mode), #ffffff (dark mode)
- **Accents**: Gradients and glows

## 📱 Responsive Design

### Breakpoints
- **Desktop**: 1200px+
- **Laptop**: 992px - 1200px
- **Tablet**: 768px - 992px
- **Mobile**: 576px - 768px
- **Small Mobile**: < 576px

### Responsive Features
- Flexible grid layouts
- Adaptive image sizing
- **Stackedalumns on mobile
- Adjusted font sizes
- Touch-friendly controls

## 🎨 Advanced CSS Features

### Glassmorphism
```css
background: rgba(255, 255, 255, 0.1);
backdrop-filter: blur(10px);
border: 1px solid rgba(255, 255, 255, 0.2);
```

### Gradient Backgrounds
```css
background: linear-gradient(135deg, #1a1a1a, #333, #1a1a1a);
background-size: 200% 200%;
animation: gradientMove 15s infinite alternate;
```

## 🚀 Performance Optimization

### Recommendations:
- Optimize images (compress, WebP format)
- Lazy load images
- Minimize CSS (extract to external file)
- Cache static assets
- Use CDN for images
- Implement pagination for galleries

## 📈 Enhancement Ideas

### Future Features:
- 📝 Blog post system with CMS
- 💬 Comments section
- 🔍 Search functionality
- 📊 Analytics dashboard
- 📱 Progressive Web App
- 🔐 Admin panel for content management
- 📧 Newsletter subscription
- ⭐ Post ratings
- 🏷️ Tag system
- 📅 Event calendar

### Technical Improvements:
- Separate CSS to external file
- Add JavaScript for interactivity
- Database integration (MySQL)
- User authentication
- Content management system
- API for mobile app
- SEO optimization
- Social media integration

## 🎓 Educational Value

### Learning Topics Covered:
- PHP basics
- Inline CSS styling
- CSS animations
- Responsive design
- Dark mode implementation
- Image gallery creation
- Video embedding
- Modern web design

## 🌐 Deployment Checklist

- [ ] Test on multiple browsers
- [ ] Optimize image sizes
- [ ] Validate PHP code
- [ ] Test responsive design
- [ ] Configure server settings
- [ ] Set up domain
- [ ] Enable HTTPS
- [ ] Test dark mode toggle
- [ ] Verify all image paths
- [ ] Check video playback

## 📝 Footer Content Features

### Footer Sections:
1. **About/Information**
2. **Contact Details**
3. **Social Media Links**
4. **Copyright Information**
5. **Creator Credits**

### Footer Design:
- Gradient background with animation
- Glassmorphism cards
- Hover effects on links
- Golden underline animations
- Celebration text with glow effects

## 💡Creator Information
The footer includes:
- Creator credits section
- Subtle, elegant typography (2rem font)
- Low-opacity text for professionalism
- Non-intrusive creator attribution

---

**Project**: TDEC (IT) Blog
**Type**: Dynamic Technology Blog Website
**Technology**: PHP + HTML/CSS
**Features**: Dark Mode, Animations, Rich Media Gallery
**Images**: 139+ photos
**Status**: Production Ready

**🌟 A Modern, Animated Technology Blog with Style!**
