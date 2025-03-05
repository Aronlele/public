// 团队协作战关卡逻辑
function teamCollaborationLevel() {
    const apis = [
        {
            request: {
                method: 'GET',
                endpoint: '/api/users',
                description: '获取用户列表'
            },
            response: {
                status: 200,
                data: '[{id: 1, name: "Alice"}, {id: 2, name: "Bob"}]'
            }
        },
        {
            request: {
                method: 'POST',
                endpoint: '/api/tasks',
                description: '创建新任务'
            },
            response: {
                status: 201,
                data: '{id: 1, title: "New Task", status: "pending"}'
            }
        }
    ];

    const gameContainer = document.getElementById('game-container');
    gameContainer.innerHTML = `
        <div class="team-collaboration fade-in">
            <h3>API接口对接挑战</h3>
            <p>将正确的API请求与对应的响应匹配</p>
            <div class="api-container">
                <div class="api-requests">
                    ${apis.map((api, index) => `
                        <div class="api-box request" draggable="true" data-index="${index}">
                            ${api.request.method} ${api.request.endpoint}
                            <br>
                            ${api.request.description}
                        </div>
                    `).join('')}
                </div>
                <div class="api-responses">
                    ${apis.map((api, index) => `
                        <div class="api-box response" data-index="${index}">
                            Status: ${api.response.status}
                            <br>
                            ${api.response.data}
                        </div>
                    `).join('')}
                </div>
            </div>
        </div>
    `;

    // 添加拖拽事件
    const requests = document.querySelectorAll('.request');
    const responses = document.querySelectorAll('.response');

    requests.forEach(request => {
        request.addEventListener('dragstart', (e) => {
            e.dataTransfer.setData('text/plain', request.getAttribute('data-index'));
        });
    });

    responses.forEach(response => {
        response.addEventListener('dragover', (e) => {
            e.preventDefault();
        });

        response.addEventListener('drop', (e) => {
            e.preventDefault();
            const requestIndex = e.dataTransfer.getData('text/plain');
            const responseIndex = response.getAttribute('data-index');
            const request = document.querySelector(`.request[data-index="${requestIndex}"]`);

            if (requestIndex === responseIndex) {
                response.style.borderColor = '#4caf50';
                request.style.borderColor = '#4caf50';
                addReward('collaborationBadge');

                // 检查是否所有接口都匹配正确
                const allMatched = Array.from(responses).every(r => 
                    r.style.borderColor === 'rgb(76, 175, 80)');

                if (allMatched) {
                    addReward('collaborationBadge', 2); // 完成所有匹配后额外奖励
                    setTimeout(() => {
                        alert('恭喜你完成团队协作关卡！');
                        completeLevel();
                    }, 1000);
                }
            } else {
                response.style.borderColor = '#f44336';
                setTimeout(() => {
                    response.style.borderColor = '';
                }, 1000);
            }
        });
    });
} 