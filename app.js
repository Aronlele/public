// 游戏状态
let gameState = {
    currentLevel: 0,
    codeFragments: 0,
    collaborationBadges: 0,
    levels: ['bugHunter', 'algorithmMaster', 'teamCollaboration', 'uxChallenge'],
    playerName: '',
    isPlaying: false
};

// 初始化游戏
document.addEventListener('DOMContentLoaded', () => {
    const startButton = document.getElementById('start-game');
    const endButton = document.getElementById('end-game');
    const playerNameInput = document.getElementById('player-name');

    startButton.addEventListener('click', startGame);
    endButton.addEventListener('click', endGame);
    playerNameInput.addEventListener('input', (e) => {
        gameState.playerName = e.target.value;
    });

    // 初始状态
    updateGameButtons();
});

function startGame() {
    if (!gameState.playerName) {
        alert('请先输入你的名字！');
        document.getElementById('player-name').focus();
        return;
    }
    gameState.currentLevel = 0;
    gameState.codeFragments = 0;
    gameState.collaborationBadges = 0;
    gameState.isPlaying = true;
    
    updateGameState();
    updateGameButtons();
    loadLevel(gameState.currentLevel);
}

function endGame() {
    if (confirm('确定要结束当前游戏吗？')) {
        gameState.isPlaying = false;
        showGameComplete();
        updateGameButtons();
    }
}

// 更新游戏状态
function updateGameState() {
    document.getElementById('code-fragments').textContent = gameState.codeFragments;
    document.getElementById('collaboration-badges').textContent = gameState.collaborationBadges;
    document.getElementById('level-indicator').textContent = 
        gameState.isPlaying ? `当前关卡: ${gameState.currentLevel + 1}/4` : '';
}

// 更新游戏按钮状态
function updateGameButtons() {
    const startButton = document.getElementById('start-game');
    const endButton = document.getElementById('end-game');
    const playerNameInput = document.getElementById('player-name');

    if (gameState.isPlaying) {
        startButton.style.display = 'none';
        endButton.style.display = 'inline-block';
        playerNameInput.disabled = true;
    } else {
        startButton.style.display = 'inline-block';
        endButton.style.display = 'none';
        playerNameInput.disabled = false;
    }
}

// 加载关卡
function loadLevel(levelIndex) {
    if (!gameState.isPlaying) return;
    
    const levelName = gameState.levels[levelIndex];
    const gameContainer = document.getElementById('game-container');
    gameContainer.innerHTML = ''; // 清空当前内容
    
    switch(levelName) {
        case 'bugHunter':
            bugHunterLevel();
            break;
        case 'algorithmMaster':
            algorithmMasterLevel();
            break;
        case 'teamCollaboration':
            teamCollaborationLevel();
            break;
        case 'uxChallenge':
            uxChallengeLevel();
            break;
    }
}

// 完成关卡
function completeLevel() {
    if (!gameState.isPlaying) return;
    
    gameState.currentLevel++;
    if (gameState.currentLevel < gameState.levels.length) {
        loadLevel(gameState.currentLevel);
        updateGameState();
    } else {
        gameState.isPlaying = false;
        showGameComplete(true); // true 表示完整通关
        updateGameButtons();
    }
}

// 显示游戏完成
function showGameComplete(isFullComplete = false) {
    const gameContainer = document.getElementById('game-container');
    
    // 创建撒花
    if (isFullComplete) {
        createConfetti();
    }
    
    // 显示完成界面和分享海报
    gameContainer.innerHTML = `
        <div class="game-complete fade-in">
            <h2>${isFullComplete ? '恭喜你完成所有关卡！' : '游戏结束'}</h2>
            <div class="share-poster" id="share-poster">
                <h2>CodeHer荣耀之路</h2>
                <p class="player-name">玩家：${gameState.playerName}</p>
                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-value">${gameState.codeFragments}</div>
                        <div class="stat-label">代码碎片</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">${gameState.collaborationBadges}</div>
                        <div class="stat-label">协作徽章</div>
                    </div>
                </div>
                <p class="level-info">完成关卡：${gameState.currentLevel}/${gameState.levels.length}</p>
            </div>
            <button class="share-button" onclick="shareResults()">分享成就</button>
            <button class="primary-button" onclick="startGame()">重新开始</button>
        </div>
    `;
}

// 创建撒花效果
function createConfetti() {
    const colors = ['#61dafb', '#4caf50', '#f44336', '#ff9800', '#9c27b0'];
    for (let i = 0; i < 50; i++) {
        const confetti = document.createElement('div');
        confetti.className = 'confetti';
        confetti.style.left = Math.random() * 100 + 'vw';
        confetti.style.animationDelay = Math.random() * 2 + 's';
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        document.body.appendChild(confetti);
        
        // 动画结束后移除元素
        setTimeout(() => {
            confetti.remove();
        }, 4000);
    }
}

// 分享结果
window.shareResults = async function() {
    try {
        const poster = document.getElementById('share-poster');
        const canvas = await html2canvas(poster);
        const image = canvas.toDataURL('image/png');
        
        // 创建临时链接并触发下载
        const link = document.createElement('a');
        link.download = `CodeHer-${gameState.playerName}-achievement.png`;
        link.href = image;
        link.click();
        
        // 提示分享
        alert('图片已保存，快去分享你的成就吧！');
    } catch (error) {
        console.error('生成分享图片时出错:', error);
        alert('生成分享图片时出错，请重试！');
    }
};

// 添加奖励
function addReward(type, amount = 1) {
    if (!gameState.isPlaying) return;
    
    if (type === 'codeFragment') {
        gameState.codeFragments += amount;
    } else if (type === 'collaborationBadge') {
        gameState.collaborationBadges += amount;
    }
    updateGameState();
} 