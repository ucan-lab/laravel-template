FROM node:22.2

WORKDIR /workspace

ARG UID=1000
ARG GID=1000

RUN <<EOF
  # permission denied bind mount in Linux environment
  usermod --uid $UID node
  groupmod --gid $GID node
  chown node:node /workspace
EOF

USER node
