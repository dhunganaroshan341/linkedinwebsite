#!/bin/bash

# Static commit message
COMMIT_MSG="Auto push"

# Git add, commit, and push
git add .
git commit -m "$COMMIT_MSG"
git push

# Optional: Show status
git status
