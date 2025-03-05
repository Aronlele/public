// 算法优化大师关卡逻辑
function algorithmMasterLevel() {
    const challenges = [
        {
            title: '斐波那契数列',
            description: '实现一个函数来计算斐波那契数列的第n项（n > 0）',
            testCases: [
                { input: 1, output: 1 },
                { input: 2, output: 1 },
                { input: 5, output: 5 }
            ],
            solution: `function fibonacci(n) {
    if (n <= 2) return 1;
    return fibonacci(n-1) + fibonacci(n-2);
}`
        }
    ];

    let currentChallengeIndex = 0;

    const gameContainer = document.getElementById('game-container');
    gameContainer.innerHTML = `
        <div class="algorithm-challenge fade-in">
            <h3>${challenges[currentChallengeIndex].title}</h3>
            <p>${challenges[currentChallengeIndex].description}</p>
            <textarea id="algorithm-input" class="algorithm-input" 
                placeholder="在这里输入你的代码..."
            ></textarea>
            <button class="primary-button" onclick="testAlgorithm()">测试算法</button>
            <div id="test-results"></div>
        </div>
    `;

    window.testAlgorithm = function() {
        const code = document.getElementById('algorithm-input').value;
        const challenge = challenges[currentChallengeIndex];
        const results = document.getElementById('test-results');

        try {
            // 创建函数
            const testFunc = new Function('return ' + code)();
            
            // 测试用例
            let allPassed = true;
            let resultsHTML = '<h4>测试结果：</h4>';

            for (let testCase of challenge.testCases) {
                try {
                    const result = testFunc(testCase.input);
                    const passed = result === testCase.output;
                    allPassed = allPassed && passed;

                    resultsHTML += `
                        <div class="test-case ${passed ? 'success' : 'error'}">
                            输入: ${testCase.input}
                            期望输出: ${testCase.output}
                            实际输出: ${result}
                            ${passed ? '✓' : '✗'}
                        </div>
                    `;
                } catch (e) {
                    allPassed = false;
                    resultsHTML += `<div class="test-case error">测试用例运行错误: ${e.message}</div>`;
                }
            }

            results.innerHTML = resultsHTML;

            if (allPassed) {
                addReward('codeFragment', 2);
                setTimeout(() => {
                    alert('恭喜你完成算法优化关卡！');
                    completeLevel();
                }, 1000);
            }
        } catch (e) {
            results.innerHTML = `<div class="error">代码编译错误: ${e.message}</div>`;
        }
    };
} 