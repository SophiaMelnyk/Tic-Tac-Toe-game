<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Гра «Хрестики-Нулики»</title>

    <style>
        body {
            font-family: 'Roboto', Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }

        .wrapper {
            text-align: center;
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            color: #2C3E50;
            font-size: 2rem;
            font-weight: bold;
        }

        h2 {
            color: #3498DB;
            font-size: 1.5rem;
            margin-top: 10px;
        }

        .player-name {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #34495E;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #3498DB;
            font-size: 1rem;
        }

        button {
            background-color: #3498DB;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980B9;
        }

        button[disabled] {
            background-color: #95A5A6;
            cursor: not-allowed;
        }

        .tic-tac-toe {
            margin: 9em;
        }
        
        .tic-tac-toe td {
            border: 2px solid #3498DB;
            width: 100px;
            height: 100px;
        }
        
        .tic-tac-toe .vertical-border {
            border-left-color: #3498DB;
            border-right-color: #3498DB;
        }

        .tic-tac-toe .horizontal-border {
            border-top-color: #3498DB;
            border-bottom-color: #3498DB;
        }
        
        .tic-tac-toe .center-border {
            border-color:#3498DB;
        }

        .reset-btn {
            display: inline-block;
            font-size: 1rem;
            color: #3498DB;
            margin-top: 40px;
            text-decoration: none;
            padding: 5px;
            border: 1px solid #3498DB;
            border-radius: 5px;
        }

        .reset-btn:hover {
            background-color: #3498DB;
            color: white;
        }

    </style>
</head>
<body>

    <div class="wrapper">