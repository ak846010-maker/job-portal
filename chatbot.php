<?php
// Handle chatbot response
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['message'])) {
    $userMessage = strtolower(trim($_POST['message']));
    $response = "I'm sorry, I didn’t understand your question about job opportunities. Can you please rephrase or be more specific?";

    // JOB OPENINGS
    if (
        strpos($userMessage, 'job') !== false ||
        strpos($userMessage, 'opening') !== false ||
        strpos($userMessage, 'vacancy') !== false ||
        strpos($userMessage, 'available') !== false
    ) {
        $response = "🎯 We currently have the following job openings:\n\n" .
            "🧑‍💻 **Entry-Level (Freshers)**\n" .
            "• Junior Web Developer\n" .
            "• Content Writer Intern\n\n" .
            "👨‍🔧 **Mid-Level**\n" .
            "• Web Developer (2+ yrs)\n" .
            "• SEO Analyst\n\n" .
            "👨‍💼 **Senior-Level**\n" .
            "• Project Manager\n" .
            "• Senior UI/UX Designer\n\n" .
            "Would you like to know about qualifications or how to apply?";
    }

    // APPLICATION INFO
    elseif (
        strpos($userMessage, 'apply') !== false ||
        strpos($userMessage, 'application') !== false ||
        strpos($userMessage, 'how to apply') !== false
    ) {
        $response = "📝 To apply, please email your resume and portfolio (if any) to:\n📧 careers@example.com\n\n" .
            "You can also use our application form here:\n🔗 https://example.com/job-application\n\n" .
            "Would you like tips on creating a strong resume?";
    }

    // FORM LINK
    elseif (strpos($userMessage, 'form') !== false) {
        $response = "🖊️ You can fill out the job application form directly at:\n🔗 https://example.com/job-application\n\n" .
            "Make sure to upload your updated resume. Need help writing a cover letter?";
    }

    // CONTACT DETAILS
    elseif (
        strpos($userMessage, 'contact') !== false ||
        strpos($userMessage, 'email') !== false ||
        strpos($userMessage, 'phone') !== false ||
        strpos($userMessage, 'hr') !== false
    ) {
        $response = "📞 You can contact our HR department for job queries at:\n\n" .
            "📧 hr@example.com\n📱 +123-456-7890\n" .
            "Available Mon–Fri, 9 AM to 6 PM.";
    }

    // GREETINGS
    elseif (strpos($userMessage, 'hello') !== false || strpos($userMessage, 'hi') !== false || strpos($userMessage, 'hey') !== false) {
        $response = "👋 Hello! I'm your job assistant bot. I can help you with job openings, how to apply, and more.\nTry asking:\n• \"Which  jobs are open?\"\n• \"How can I apply?\"\n• \"Contact HR\"";
    }

    // THANK YOU / CLOSING
    elseif (strpos($userMessage, 'thanks') !== false || strpos($userMessage, 'thank you') !== false) {
        $response = "😊 You're very welcome! Let me know if you want help with applications, resume tips, or interviews.";
    } elseif (strpos($userMessage, 'bye') !== false || strpos($userMessage, 'goodbye') !== false) {
        $response = "👋 Goodbye! Best of luck with your job search. Hope to hear from you soon!";
    }

    // ADVANCED FOLLOW-UP
    elseif (
        strpos($userMessage, 'qualification') !== false ||
        strpos($userMessage, 'skills') !== false ||
        strpos($userMessage, 'experience') !== false
    ) {
        $response = "📚 Requirements vary by role:\n\n" .
            "✅ For Junior Roles:\n- Basic HTML/CSS/JS knowledge\n- Good communication\n- Willingness to learn\n\n" .
            "✅ For Senior Roles:\n- 3+ years of experience\n- Strong portfolio\n- Project/team management\n\nWould you like a detailed JD?";
    }

    echo nl2br($response);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Job Enquiry Chatbot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #e3f2fd, #fff);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .chat-container {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        #chat-box {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            border-bottom: 1px solid #e0e0e0;
            background: #f9f9f9;
        }

        .message {
            margin-bottom: 12px;
            padding: 12px 16px;
            border-radius: 18px;
            max-width: 80%;
            line-height: 1.4;
            word-wrap: break-word;
            transition: transform 0.2s ease;
        }

        .message.user {
            background-color: #d0ebff;
            color: #0c5460;
            align-self: flex-end;
            text-align: right;
        }

        .message.bot {
            background-color: #e9ecef;
            color: #343a40;
            align-self: flex-start;
            text-align: left;
        }

        .message.user:hover {
            background-color: #bee3f8;
            transform: scale(1.02);
            cursor: default;
        }

        .message.bot:hover {
            background-color: #dee2e6;
            transform: scale(1.02);
            cursor: default;
        }

        form {
            display: flex;
            padding: 16px;
            background: #ffffff;
        }

        input[type="text"] {
            flex: 1;
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 20px;
            outline: none;
            font-size: 15px;
        }

        button {
            padding: 0 16px;
            margin-left: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #0056b3;
        }

        button[title] {
            position: relative;
        }

        @media (max-width: 600px) {
            .chat-container {
                height: 100vh;
                border-radius: 0;
            }

            form {
                padding: 10px;
            }

            input[type="text"] {
                font-size: 14px;
            }

            button {
                font-size: 14px;
                padding: 0 12px;
            }
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <div id="chat-box"></div>
        <form id="chat-form">
            <input type="text" id="user-input" placeholder="Ask about job openings..." required autocomplete="off">
            <button type="submit" title="Click to send your message">Send</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('chat-form');
        const input = document.getElementById('user-input');
        const chatBox = document.getElementById('chat-box');

        form.onsubmit = async (e) => {
            e.preventDefault();
            const userMessage = input.value.trim();
            if (!userMessage) return;

            const userBubble = document.createElement('div');
            userBubble.className = 'message user';
            userBubble.textContent = userMessage;
            userBubble.title = 'You said: ' + userMessage;
            chatBox.appendChild(userBubble);
            input.value = '';

            chatBox.scrollTop = chatBox.scrollHeight;

            const res = await fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'message=' + encodeURIComponent(userMessage)
            });

            const botText = await res.text();

            const botBubble = document.createElement('div');
            botBubble.className = 'message bot';
            botBubble.innerHTML = botText;
            botBubble.title = 'Bot response';
            chatBox.appendChild(botBubble);

            chatBox.scrollTop = chatBox.scrollHeight;
        };
    </script>
</body>

</html>