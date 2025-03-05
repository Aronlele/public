// Bug猎手关卡逻辑
function bugHunterLevel() {
    const bugs = [
        {
            code: `function calculateSum(a, b) {
    return a + b
}`,
            error: '缺少分号',
            line: 2,
            fix: `function calculateSum(a, b) {
    return a + b;
}`
        },
        {
            code: `if (count = 5) {
    console.log("Equal to 5");
}`,
            error: '使用赋值运算符而不是比较运算符',
            line: 1,
            fix: `if (count === 5) {
    console.log("Equal to 5");
}`
        }
    ];

    let currentBugIndex = 0;

    const gameContainer = document.getElementById('game-container');
    gameContainer.innerHTML = `
        <div class="bug-hunter fade-in">
            <h3>找出并修复代码中的Bug</h3>
            <div class="code-editor" id="code-container">
                <pre><code id="code-content"></code></pre>
            </div>
            <p id="bug-hint">提示：查找代码中的语法错误</p>
            <button class="primary-button" onclick="checkBugFix()">修复Bug</button>
        </div>
    `;

    function displayBug() {
        const codeContent = document.getElementById('code-content');
        const currentBug = bugs[currentBugIndex];
        codeContent.innerHTML = currentBug.code
            .split('\n')
            .map((line, index) => `<span class="code-line" data-line="${index + 1}">${line}</span>`)
            .join('\n');

        // 添加点击事件
        document.querySelectorAll('.code-line').forEach(line => {
            line.addEventListener('click', () => {
                document.querySelectorAll('.code-line').forEach(l => l.classList.remove('error'));
                line.classList.add('error');
            });
        });
    }

    window.checkBugFix = function() {
        const selectedLine = document.querySelector('.code-line.error');
        if (!selectedLine) {
            alert('请先选择包含bug的代码行！');
            return;
        }

        const lineNumber = parseInt(selectedLine.getAttribute('data-line'));
        const currentBug = bugs[currentBugIndex];

        if (lineNumber === currentBug.line) {
            // 修复成功
            selectedLine.textContent = currentBug.fix.split('\n')[lineNumber - 1];
            addReward('codeFragment');
            
            currentBugIndex++;
            if (currentBugIndex < bugs.length) {
                setTimeout(() => {
                    displayBug();
                }, 1000);
            } else {
                setTimeout(() => {
                    alert('恭喜你完成Bug猎手关卡！');
                    completeLevel();
                }, 1000);
            }
        } else {
            alert('这行代码没有bug，请重试！');
        }
    };

    displayBug();
} 