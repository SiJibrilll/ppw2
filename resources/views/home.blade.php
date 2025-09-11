<!-- Hero Section -->
 @extends('layouts.app')

 @section('content')
        <section class="hero-section">
            <h1 class="hero-title">Welcome to ComicVerse</h1>
            <p class="hero-subtitle">{{$data}}</p>
        </section>

        <!-- Comics Grid -->
        <section class="comics-grid">
            <div class="comic-card">
                <div class="comic-thumbnail"></div>
                <div class="comic-info">
                    <h3 class="comic-title">Mystic Realms</h3>
                    <p class="comic-author">by Sarah Chen</p>
                    <p class="comic-description">A young mage discovers ancient secrets that could save or destroy her magical world in this epic fantasy adventure.</p>
                    <div class="comic-stats">
                        <span class="genre-tag">Fantasy</span>
                        <span>⭐ 4.8 | 152K reads</span>
                    </div>
                </div>
            </div>

            <div class="comic-card">
                <div class="comic-thumbnail"></div>
                <div class="comic-info">
                    <h3 class="comic-title">Neon Dreams</h3>
                    <p class="comic-author">by Alex Rodriguez</p>
                    <p class="comic-description">In a cyberpunk future, a hacker uncovers a conspiracy that threatens the last free city on Earth.</p>
                    <div class="comic-stats">
                        <span class="genre-tag">Sci-Fi</span>
                        <span>⭐ 4.6 | 89K reads</span>
                    </div>
                </div>
            </div>

            <div class="comic-card">
                <div class="comic-thumbnail"></div>
                <div class="comic-info">
                    <h3 class="comic-title">Heart Strings</h3>
                    <p class="comic-author">by Emma Park</p>
                    <p class="comic-description">A heartwarming romance about two music students who find love through their shared passion for melodies.</p>
                    <div class="comic-stats">
                        <span class="genre-tag">Romance</span>
                        <span>⭐ 4.9 | 203K reads</span>
                    </div>
                </div>
            </div>

            <div class="comic-card">
                <div class="comic-thumbnail"></div>
                <div class="comic-info">
                    <h3 class="comic-title">Shadow Academy</h3>
                    <p class="comic-author">by Marcus Kim</p>
                    <p class="comic-description">Students with supernatural abilities must master their powers while uncovering dark secrets within their school.</p>
                    <div class="comic-stats">
                        <span class="genre-tag">Supernatural</span>
                        <span>⭐ 4.7 | 134K reads</span>
                    </div>
                </div>
            </div>

            <div class="comic-card">
                <div class="comic-thumbnail"></div>
                <div class="comic-info">
                    <h3 class="comic-title">Cosmic Wanderer</h3>
                    <p class="comic-author">by Luna Zhang</p>
                    <p class="comic-description">An intergalactic explorer searches for her lost home planet while making allies across the universe.</p>
                    <div class="comic-stats">
                        <span class="genre-tag">Adventure</span>
                        <span>⭐ 4.5 | 76K reads</span>
                    </div>
                </div>
            </div>

            <div class="comic-card">
                <div class="comic-thumbnail"></div>
                <div class="comic-info">
                    <h3 class="comic-title">Cafe Chronicles</h3>
                    <p class="comic-author">by David Johnson</p>
                    <p class="comic-description">Slice-of-life stories centered around a cozy neighborhood cafe and the interesting people who visit daily.</p>
                    <div class="comic-stats">
                        <span class="genre-tag">Slice of Life</span>
                        <span>⭐ 4.8 | 167K reads</span>
                    </div>
                </div>
            </div>
        </section>
@endsection