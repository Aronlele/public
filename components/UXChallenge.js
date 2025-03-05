// 用户体验挑战关卡逻辑
function uxChallengeLevel() {
    const gameContainer = document.getElementById('game-container');
    gameContainer.innerHTML = `
        <div class="ux-challenge fade-in">
            <h3>用户体验设计挑战</h3>
            <p>完成以下交互设计任务：</p>
            
            <div class="challenge-container">
                <div class="challenge-item">
                    <h4>任务1：长按菜单</h4>
                    <button class="ux-button" id="long-press-button">
                        长按显示菜单
                        <div class="ux-menu" id="long-press-menu">
                            <div class="menu-item">选项 1</div>
                            <div class="menu-item">选项 2</div>
                            <div class="menu-item">选项 3</div>
                        </div>
                    </button>
                </div>

                <div class="challenge-item">
                    <h4>任务2：主题切换</h4>
                    <div class="theme-switcher">
                        <input type="range" id="theme-slider" min="0" max="100" value="50">
                        <div class="theme-labels">
                            <span>浅色</span>
                            <span>深色</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;

    // 长按菜单逻辑
    let pressTimer;
    const longPressButton = document.getElementById('long-press-button');
    const longPressMenu = document.getElementById('long-press-menu');
    let task1Completed = false;

    longPressButton.addEventListener('mousedown', () => {
        pressTimer = setTimeout(() => {
            longPressMenu.style.display = 'block';
            if (!task1Completed) {
                task1Completed = true;
                addReward('codeFragment');
                checkCompletion();
            }
        }, 1000);
    });

    longPressButton.addEventListener('mouseup', () => {
        clearTimeout(pressTimer);
    });

    longPressButton.addEventListener('mouseleave', () => {
        clearTimeout(pressTimer);
        setTimeout(() => {
            longPressMenu.style.display = 'none';
        }, 500);
    });

    // 主题切换逻辑
    let task2Completed = false;
    const themeSlider = document.getElementById('theme-slider');
    
    themeSlider.addEventListener('input', (e) => {
        const value = e.target.value;
        document.documentElement.style.setProperty('--theme-mix', `${value}%`);
        
        if (!task2Completed && (value === '0' || value === '100')) {
            task2Completed = true;
            addReward('codeFragment');
            checkCompletion();
        }
    });

    function checkCompletion() {
        if (task1Completed && task2Completed) {
            addReward('collaborationBadge', 2);
            setTimeout(() => {
                alert('恭喜你完成用户体验关卡！');
                completeLevel();
            }, 1000);
        }
    }

    // 添加额外的样式
    const style = document.createElement('style');
    style.textContent = `
        .challenge-container {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin-top: 20px;
        }

        .challenge-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        .theme-switcher {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .theme-labels {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 200px;
        }

        #theme-slider {
            width: 200px;
        }

        .menu-item {
            padding: 8px 16px;
            cursor: pointer;
        }

        .menu-item:hover {
            background: rgba(97, 218, 251, 0.1);
        }
    `;
    document.head.appendChild(style);
} 